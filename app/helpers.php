<?php

    if (!function_exists('cmeta')) {
        function cmeta(string $key = '', $post_id = null, array $args = []) {
            $post_id = $post_id ?? get_the_ID();
            $value = null;

            if (class_exists(\App\Database\CustomTableManager::class)) {
                $value = \App\Database\CustomTableManager::getMeta((int)$post_id, $key);
            } elseif (function_exists('rwmb_meta')) {
                $value = rwmb_meta($key, $args, $post_id);
            }

            // === FIX FLAGS: Luôn trả về array cho checkbox_list ===
            if ($key === 'flags' || str_contains($key, 'flag')) {
                if (is_string($value)) {
                    $decoded = json_decode($value, true);
                    if (is_array($decoded)) {
                        return $decoded;
                    }
                    return [$value]; // 'breaking' → ['breaking']
                }
                if (!is_array($value)) {
                    return $value ? [$value] : [];
                }
            }

            return $value;
        }
    }

    // Helper cache file list (static + transient) – DÙNG CHO AUTO REGISTER
    if (!function_exists('sage_get_files')) {
        function sage_get_files(string $folder, string $exclude = ''): array {
            static $cache = [];
            $key = md5($folder . $exclude);
            if (isset($cache[$key])) return $cache[$key];
            if (!is_dir($folder)) return [];
            $files = glob($folder . '/*.php');
            if ($exclude) {
                $files = array_filter($files, fn($f) => basename($f) !== $exclude);
            }
            $cache[$key] = $files;
            return $files;
        }
    }

    // Helper bổ sung (tương lai scale)
    if (!function_exists('cpost')) {
        function cpost($post_id = null) {
            return get_post($post_id ?? get_the_ID());
        }
    }

    if (!function_exists('cterm_meta')) {
        /**
         * Lấy Term Meta (Taxonomy Meta) siêu dễ – dùng với Meta Box
         * Ví dụ: cterm_meta('thumbnail_id'), cterm_meta('icon')
         */
        function cterm_meta(string $key, $term_id = null, array $args = []) {
            $term_id = $term_id ?? get_queried_object_id();
            if (!$term_id) return null;

            return rwmb_meta($key, ['object_type' => 'term'] + $args, $term_id);
        }
    }

    /**
     * Lấy Theme Option với cache (siêu nhanh)
     */
    if (!function_exists('theme_option')) {
        function theme_option(string $key, $default = null)
        {
            return \App\CMB2\ThemeOptions::get($key, $default);
        }
    }

    if (!function_exists('tmeta')) {
        function tmeta(string $key, int $term_id = 0)
        {
            if ($term_id === 0) {
                $term = get_queried_object();
                $term_id = $term->term_id ?? 0;
            }
            return get_term_meta($term_id, $key, true);
        }
    }

    if (!function_exists('get_toc')) {
        function get_toc() {
            if (!is_singular()) return [];

            $content = get_post_field('post_content', get_the_ID());
            $headings = [];

            preg_match_all('/<h([2-4])([^>]*)id="([^"]+)"([^>]*)>(.*?)<\/h\1>/is', $content, $matches, PREG_SET_ORDER);

            foreach ($matches as $m) {
                $headings[] = [
                    'level' => (int)$m[1],
                    'id'    => $m[3],
                    'text'  => wp_strip_all_tags($m[5])
                ];
            }

            return $headings;
        }
    }

    if (!function_exists('sage_menu')) {
        function sage_menu(string $location, array $args = []): string
        {
            $defaults = [
                'theme_location' => $location,
                'container'      => false,
                'echo'           => false,
                'fallback_cb'    => false,
            ];
            return wp_nav_menu(array_merge($defaults, $args));
        }
    }


    if (!function_exists('sage_prefetch_link_posts')) {
        /**
         * Gọi TRƯỚC loop để prefetch meta + permalink + title một lần duy nhất
         * → Giảm 70–90% queries khi hiển thị nhiều card
         */
        function sage_prefetch_link_posts(array $posts): void {
            if (empty($posts)) return;

            $ids = [];
            foreach ($posts as $p) {
                $ids[] = is_object($p) && isset($p->ID) ? $p->ID : (int) $p;
            }
            $ids = array_unique(array_filter($ids));

            if (empty($ids)) return;

            // Bulk meta prefetch (siêu mạnh!)
            update_postmeta_cache($ids);

            // Prime post cache (permalink + title)
            _prime_post_caches($ids, false, true);
        }
    }

    if (!function_exists('sage_post_link')) {
        function sage_post_link($post = 0, string $link_type = 'default'): array {
            static $cache = [];

            // Hỗ trợ cả WP_Post object lẫn ID
            if (is_object($post) && isset($post->ID)) {
                $post_id    = $post->ID;
                $post_title = $post->post_title;               // Nhanh nhất
                $post_obj   = $post;
            } else {
                $post_id = (int) ($post ?: get_the_ID());
                $post_title = '';
                $post_obj   = null;
            }

            if ($post_id <= 0) {
                return [
                    'url'          => '#',
                    'target'       => '',
                    'rel'          => '',
                    'is_external'  => false,
                    'link_type'    => $link_type,
                    'post_id'      => 0,
                    'post_title'   => '',
                    'is_redirect'  => false,
                ];
            }

            $cache_key = $post_id . '|' . $link_type;
            if (isset($cache[$cache_key])) {
                return $cache[$cache_key];
            }

            // Dùng get_post_meta native (nhanh hơn rwmb_meta)
            $is_redirect   = (bool) get_post_meta($post_id, 'is_redirect', true);
            $redirect_url  = get_post_meta($post_id, 'redirect_url', true);

            if ($is_redirect && !empty($redirect_url) && filter_var($redirect_url, FILTER_VALIDATE_URL)) {
                $data = [
                    'url'          => esc_url($redirect_url),
                    'target'       => '_blank',
                    'rel'          => 'noopener noreferrer',
                    'is_external'  => true,
                    'link_type'    => $link_type,
                    'post_id'      => $post_id,
                    'post_title'   => $post_title ?: get_the_title($post_id),
                    'is_redirect'  => true,
                ];
            } else {
                $data = [
                    'url'          => get_permalink($post_obj ?: $post_id),
                    'target'       => '',
                    'rel'          => '',
                    'is_external'  => false,
                    'link_type'    => $link_type,
                    'post_id'      => $post_id,
                    'post_title'   => $post_title ?: get_the_title($post_id),
                    'is_redirect'  => false,
                ];
            }

            return $cache[$cache_key] = $data;
        }
    }

    if (!function_exists('sage_link_data_attrs')) {
        function sage_link_data_attrs(array $link): string {
            return sprintf(
                ' data-post-id="%d" data-post-title="%s" data-link-type="%s" data-is-external="%s" data-is-redirect="%s"',
                $link['post_id'] ?? 0,
                esc_attr($link['post_title'] ?? ''),
                esc_attr($link['link_type'] ?? 'default'),
                $link['is_external'] ? 'true' : 'false',
                $link['is_redirect'] ? 'true' : 'false'
            );
        }
    }

    if (!function_exists('sage_post_title_link')) {
        function sage_post_title_link($post = 0, string $extra_class = '', string $link_type = 'default'): string {
            $link  = sage_post_link($post, $link_type);
            $title = get_the_title($post);
            $class = $extra_class ? ' class="' . esc_attr($extra_class) . '"' : '';

            return sprintf(
                '<a href="%s"%s%s%s%s>%s</a>',
                $link['url'],
                $link['target'] ? ' target="' . $link['target'] . '"' : '',
                $link['rel'] ? ' rel="' . $link['rel'] . '"' : '',
                $class,
                sage_link_data_attrs($link),
                esc_html($title)
            );
        }
    }

    if (!function_exists('sage_post_link_open')) {
        function sage_post_link_open($post = 0, string $extra_classes = '', string $link_type = 'default'): string {
            $link = sage_post_link($post, $link_type);
            $classes = 'group' . ($extra_classes ? ' ' . trim($extra_classes) : '');

            return '<a href="' . $link['url'] . '"' .
                   ($link['target'] ? ' target="' . $link['target'] . '"' : '') .
                   ($link['rel'] ? ' rel="' . $link['rel'] . '"' : '') .
                   sage_link_data_attrs($link) .
                   ' class="' . esc_attr($classes) . '">';
        }
    }

    if (!function_exists('sage_post_link_close')) {
        function sage_post_link_close(): string {
            return '</a>';
        }
    }

    if (!function_exists('sage_get_flags')) {
        function sage_get_flags($post): array
        {
            $post_id = is_object($post) ? $post->ID : (int) $post;
            return $post_id > 0 
                ? \App\Database\CustomTableManager::getMeta($post_id, 'flags', false) 
                : [];
        }
    }

    if (!function_exists('sage_get_primary_flag')) {
        function sage_get_primary_flag($post): string
        {
            $flags = sage_get_flags($post);
            if (empty($flags)) return '';

            // Kiểm tra field is_pinned trước (ưu tiên tuyệt đối)
            $is_pinned = \App\Database\CustomTableManager::getMeta($post->ID ?? $post, 'is_pinned');
            if ($is_pinned === '1' || $is_pinned === 1) {
                return 'pinned';
            }

            // Thang điểm ưu tiên
            $priority = [
                'pinned'         => 100,
                'breaking'       => 90,
                'hot'            => 80,
                'featured'       => 70,
                'sponsored'      => 60,
                'first-aid'      => 50,
                'diabetic'       => 45,
                'medical-device' => 40,
            ];

            $best_flag = '';
            $best_score = -1;

            foreach ($flags as $flag) {
                $score = $priority[$flag] ?? 10;   // flag lạ = 10 điểm
                if ($score > $best_score) {
                    $best_score = $score;
                    $best_flag  = $flag;
                }
            }

            return $best_flag;
        }
    }

    if (!function_exists('sage_flag_badge')) {
        function sage_flag_badge(string $flag): string
        {
            $badges = [
                'pinned'         => '<span class="absolute top-3 left-3 bg-blue-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">📌 PINNED</span>',
                'breaking'       => '<span class="absolute top-3 left-3 bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">🚨 BREAKING</span>',
                'hot'            => '<span class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">🔥 HOT</span>',
                'featured'       => '<span class="absolute top-3 left-3 bg-purple-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">⭐ FEATURED</span>',
                'sponsored'      => '<span class="absolute top-3 left-3 bg-emerald-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">💰 SPONSORED</span>',
                'first-aid'      => '<span class="absolute top-3 left-3 bg-green-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">🩹 FIRST AID</span>',
                'diabetic'       => '<span class="absolute top-3 left-3 bg-amber-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">🩸 DIABETIC</span>',
                'medical-device' => '<span class="absolute top-3 left-3 bg-cyan-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">🩺 MEDICAL</span>',
            ];

            return $badges[$flag] ?? '';
        }
    }    
    
    if (!function_exists('sage_views')) {
        function sage_views($post = null) {
            $id = $post ? (is_object($post) ? $post->ID : $post) : get_the_ID();
            return number_format(\App\Helpers\ViewCounter::getViews($id));
        }
    }

    if (!function_exists('sage_hot_badge')) {
        function sage_hot_badge($post = null) {
            $id = $post ? (is_object($post) ? $post->ID : $post) : get_the_ID();
            if (\App\Helpers\ViewCounter::isHot($id)) {
                return '<span class="absolute top-3 right-3 bg-red-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow">🔥 ĐANG HOT</span>';
            }
            return '';
        }
    }

    if (!function_exists('sage_footer_column')) {
        function sage_footer_column(string $location, string $fallback_title = ''): string {
            // Kiểm tra menu có tồn tại không
            if (!has_nav_menu($location)) {
                return '';
            }

            // Lấy menu locations một cách an toàn
            $locations = get_nav_menu_locations();
            $menu_id   = $locations[$location] ?? 0;

            $menu = wp_get_nav_menu_object($menu_id);
            $title = $menu ? $menu->name : $fallback_title;

            $output = '<div class="col-span-12 sm:col-span-2">';

            // Tiêu đề cột
            if ($title) {
                $output .= '<a href="#" class="block text-white font-semibold hover:text-emerald-400 mb-4">' 
                         . esc_html($title) 
                         . '</a>';
            }

            // Render menu
            $output .= wp_nav_menu([
                'theme_location' => $location,
                'container'      => false,
                'menu_class'     => 'space-y-2.5 text-sm footer-menu',
                'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
                'echo'           => false,
                'fallback_cb'    => false,
                'depth'          => 1,
            ]);

            $output .= '</div>';
            return $output;
        }
    }

    if (!function_exists('sage_thumbnail')) {
        function sage_thumbnail(string $size = 'thumb-medium', array $attr = [], $post = null): string
        {
            $post = get_post($post);
            if (!$post) return '';

            $thumb_id = get_post_thumbnail_id($post->ID);

            $defaults = [
                'class'    => 'w-full !h-full object-cover transition-transform duration-300',
                'loading'  => 'lazy',
                'decoding' => 'async',
                'alt'      => get_the_title($post),
            ];

            $attr = wp_parse_args($attr, $defaults);

            // === FORCE PLACEHOLDER khi không có ảnh thật ===
            if (!$thumb_id && class_exists('\App\Placeholders\PlaceholderHandler')) {
                return \App\Placeholders\PlaceholderHandler::replaceWithPlaceholder(
                    '', $post->ID, 0, $size, $attr
                );
            }

            // Có ảnh thật → trả về wp_get_attachment_image (có srcset đầy đủ)
            return wp_get_attachment_image($thumb_id, $size, false, $attr);
        }
    }   

    if (!function_exists('sage_post_author_link')) {
        function sage_post_author_link($post = null, string $extra_class = ''): string
        {
            $post = get_post($post);
            if (!$post) {
                return '<span class="text-primary-100">By Admin</span>';
            }

            // Ưu tiên custom_author (nếu có)
            $custom_author = cmeta('custom_author', $post->ID);
            if ($custom_author && is_string($custom_author) && trim($custom_author) !== '') {
                $author_name = trim($custom_author);
                $author_id   = $post->post_author; // vẫn dùng ID gốc để lấy link archive
            } else {
                $author_id   = $post->post_author;
                $author_name = get_the_author_meta('display_name', $author_id) ?: 'By Admin';
            }

            $author_url = get_author_posts_url($author_id);

            $class = $extra_class ? ' ' . trim($extra_class) : '';

            return sprintf(
                '<a href="%s" class="%s">%s</a>',
                esc_url($author_url),
                esc_attr($class),
                esc_html($author_name)
            );
        }
    }    

    if (!function_exists('sage_post_date')) {
        function sage_post_date($post = null, bool $use_modified = false, bool $raw = false, string $extra_class = ''): string
        {
            $post = get_post($post);
            if (!$post) {
                return $raw ? 'Không có ngày' : '<span class="text-light-secondary-text">Không có ngày</span>';
            }

            $format = 'd M Y'; // Giữ nguyên format bạn đang dùng: 12:40 PM, 09 Feb 2027

            $date = $use_modified
                ? get_the_modified_date($format, $post)
                : get_the_date($format, $post);

            $prefix = $use_modified ? '' : '';

            if ($raw) {
                // Trả về chỉ text (dùng cho content.blade.php)
                return $prefix . $date;
            }

            // Trả về <span> đầy đủ (dùng cho slide & grid)
            $class = $extra_class ? ' ' . trim($extra_class) : '';
            return sprintf(
                '<span class="sm:text-base sm:leading-[27px] text-sm text-primary-100%s">%s%s</span>',
                esc_attr($class),
                $prefix,
                esc_html($date)
            );
        }
    }

    if (!function_exists('sage_get_sidebar_banner')) {
        function sage_get_sidebar_banner(int $block = 1): string
        {
            if (!in_array($block, [1, 2])) return '';

            $option_key   = 'widget_block_' . $block;
            $tax_meta_key = 'banner_' . $block;

            $data = null;

            // ==================== 1. SINGLE POST / EVENT ====================
            if (is_singular(['post', 'event'])) {
                // Lấy taxonomy tương ứng của bài viết
                $taxonomy = (get_post_type() === 'post') ? 'category' : 'event-categories';
                $terms    = get_the_terms(get_the_ID(), $taxonomy);
                $term     = (!empty($terms) && !is_wp_error($terms)) ? reset($terms) : null;

                if ($term) {
                    $tax = get_term_meta($term->term_id, $tax_meta_key, true);
                    $tax = maybe_unserialize($tax);

                    if (isset($tax[0]) && is_array($tax[0])) {
                        $tax = $tax[0];
                    }

                    if (!empty($tax['image_id']) || !empty($tax['image'])) {
                        $data = $tax;
                    }
                }
            }

            // ==================== 2. ARCHIVE CATEGORY / TAXONOMY ====================
            elseif (is_category() || is_tax('event-categories')) {
                $term = get_queried_object();
                if ($term && !is_wp_error($term)) {
                    $tax = get_term_meta($term->term_id, $tax_meta_key, true);
                    $tax = maybe_unserialize($tax);

                    if (isset($tax[0]) && is_array($tax[0])) {
                        $tax = $tax[0];
                    }

                    if (!empty($tax['image_id']) || !empty($tax['image'])) {
                        $data = $tax;
                    }
                }
            }

            // ==================== 3. TRANG CHỦ + FALLBACK ====================
            if (empty($data['image_id']) && empty($data['image'])) {
                $options = get_option('theme_options', []);
                $data    = $options[$option_key] ?? null;

                if (isset($data[0]) && is_array($data[0])) {
                    $data = $data[0];
                }
            }

            // ==================== XỬ LÝ ẢNH & TRẢ VỀ HTML ====================
            $image_id  = $data['image_id'] ?? 0;
            $image_url = $image_id ? wp_get_attachment_url($image_id) : ($data['image'] ?? '');

            if (empty($image_url)) {
                return '';
            }

            $title   = $data['title'] ?? '';
            $link    = $data['link'] ?? '#';
            $new_tab = !empty($data['new_tab']) ? ' target="_blank" rel="noopener"' : '';

            return sprintf(
                '<div class="widget-banner mb-5">
                    <a href="%s"%s>
                        <img src="%s" alt="%s" class="w-full">
                    </a>
                </div>',
                esc_url($link),
                $new_tab,
                esc_url($image_url),
                esc_attr($title)
            );
        }
    }

    if (!function_exists('sage_excerpt')) {
        function sage_excerpt($post = null, bool $fallback_to_content = false, int $words = 55): string
        {
            $post = get_post($post); // Hỗ trợ cả ID, WP_Post, hoặc null (current post)

            if (!$post) {
                return '';
            }

            // Lấy Excerpt thủ công (post_excerpt)
            $excerpt = trim($post->post_excerpt ?? '');

            // Nếu có excerpt thủ công → trả về luôn (ưu tiên cao nhất)
            if (!empty($excerpt)) {
                return $excerpt;
            }

            // Nếu không có excerpt và bạn cho phép fallback
            if ($fallback_to_content) {
                $content = get_the_content(null, false, $post);
                return wp_trim_words($content, $words, '...');
            }

            // Mặc định: không có excerpt thủ công thì trả về rỗng
            return '';
        }
    }

    if (!function_exists('sage_format_bds_price')) {
        function sage_format_bds_price(float $price_vnd): string {
            if ($price_vnd <= 0) {
                return 'Liên hệ';
            }

            // 1 tỷ = 1_000_000_000
            if ($price_vnd >= 1_000_000_000) {
                $ty      = floor($price_vnd / 1_000_000_000);
                $remainder = $price_vnd % 1_000_000_000;
                $trieu   = floor($remainder / 1_000_000);

                if ($trieu > 0) {
                    return $ty . ' tỷ ' . $trieu . ' triệu';
                }
                return $ty . ' tỷ';
            }

            // Dưới 1 tỷ → hiển thị triệu
            $trieu = floor($price_vnd / 1_000_000);
            return $trieu . ' triệu';
        }
    }

    if (!function_exists('sage_format_bds_area')) {
        function sage_format_bds_area(float $area): string {
            if ($area <= 0) {
                return '—';
            }
            // Nếu là số nguyên thì không hiện .0
            return (fmod($area, 1) == 0)
                ? number_format($area, 0) . ' m²'
                : number_format($area, 1) . ' m²';
        }
    }

    if (!function_exists('sage_bds_info')) {
        function sage_bds_info($post = null): array {
            $post = get_post($post);
            if (!$post) {
                return ['price' => 'Liên hệ', 'area' => '—', 'location' => 'Chưa cập nhật', 'type' => ''];
            }

            static $cache = [];
            $cacheKey = $post->ID;
            if (isset($cache[$cacheKey])) {
                return $cache[$cacheKey];
            }

            $pt   = $post->post_type;
            $data = ['post_type' => $pt];

            if ($pt === 'property-for-sale') {
                $data['price']    = sage_format_bds_price((float) cmeta('price'));
                $area             = cmeta('land_area') ?: cmeta('usable_area');
                $data['area']     = sage_format_bds_area((float) $area);
                $data['location'] = cmeta('address_detail') ?: 'Chưa cập nhật';

                $type = cmeta('property_type');
                $data['type'] = match($type) {
                    'house'     => 'Nhà riêng',
                    'apartment' => 'Căn hộ chung cư',
                    'land'      => 'Đất thổ cư',
                    default     => 'Bất động sản',
                };

            } elseif ($pt === 'property-for-rent') {
                $rent = (int) cmeta('rent_monthly_rent');
                $data['price'] = $rent >= 1000000
                    ? number_format($rent / 1000000, 0) . ' triệu/tháng'
                    : number_format($rent) . ' VNĐ/tháng';

                $data['area']     = sage_format_bds_area((float) cmeta('rent_usable_area'));
                $data['location'] = cmeta('rent_address_detail') ?: 'Chưa cập nhật';

                $type = cmeta('rent_property_type');
                $data['type'] = match($type) {
                    'house'     => 'Nhà riêng',
                    'apartment' => 'Căn hộ chung cư',
                    'layout'    => 'Mặt bằng',
                    default     => 'Cho thuê',
                };
            }

            return $cache[$cacheKey] = $data;
        }
    }

    if (!function_exists('sage_bds_get_gallery_ids')) {
        function sage_bds_get_gallery_ids($post = null): array {
            $post = get_post($post);
            if (!$post) return [];

            static $cache = [];
            $key = $post->ID;
            if (isset($cache[$key])) return $cache[$key];

            $field = ($post->post_type === 'property-for-sale') 
                ? 'property_images' 
                : 'rent_property_images';

            $ids = [];
            if (function_exists('rwmb_meta')) {
                $ids = rwmb_meta($field, [], $post->ID);          
            } else {
                $ids = get_post_meta($post->ID, $field, false);  
            }

            $ids = array_map('intval', (array) $ids);
            $ids = array_values(array_filter($ids));   

            return $cache[$key] = $ids;
        }
    }

    if (!function_exists('sage_bds_gallery_count')) {
        function sage_bds_gallery_count($post = null): int {
            return count(sage_bds_get_gallery_ids($post));
        }
    }

if (!function_exists('sage_bds_first_gallery_image')) {
    function sage_bds_first_gallery_image(string $size = 'thumb-medium', array $attr = [], $post = null): string {
        $post = get_post($post);
        if (!$post) {
            return '';
        }

        $field = ($post->post_type === 'property-for-sale') 
            ? 'property_images' 
            : 'rent_property_images';

        $ids = get_post_meta($post->ID, $field, false);

        $first_id = !empty($ids) ? (int) reset($ids) : 0;

        if ($first_id > 0) {
            $attr = wp_parse_args($attr, [
                'class'    => 'thumbnail-avatar',
                'loading'  => 'lazy',
                'decoding' => 'async',
                'alt'      => get_the_title($post) ?: 'Bất động sản',
            ]);
            return wp_get_attachment_image($first_id, $size, false, $attr);
        }

        return sage_thumbnail($size, $attr, $post);
    }
}