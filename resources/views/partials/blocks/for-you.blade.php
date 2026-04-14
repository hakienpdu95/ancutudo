@php 
$query = \App\Queries\MergedPostsQuery::latest(8); 
@endphp

<div class="section-secondary" style="padding: 10px 0;">
    <div class="ui container stackable post-for-you-block">
        <div style="margin-top:30px;">
            <div class="ui grid mobile-margin-bottom-10" style="margin-bottom: 20px">
                <div class="row" style=" align-items: center; padding:0;">
                    <div class="sixteen wide mobile eight wide tablet eight wide computer column left floated">
                        <span class="title-content">Bất động sản dành cho bạn</span>
                    </div>
                    <div class="eight wide tablet eight wide computer only column">
                        <div class="ui grid" style="padding-right: 14px;">
                            <div class="row" style="justify-content: end; align-items:center; padding: 0; margin-top:5px;">
                                <a href="/ban-nha-dat-toan-quoc" class="black link">Tin nhà đất bán mới nhất</a>
                                <div class="divider-header" style="height:15px; margin-left:5px; margin-right:5px"></div>
                                <a href="/cho-thue-nha-dat-toan-quoc" class="black link">Tin nhà đất cho thuê mới nhất</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui stackable grid posts-for-you-grid">
                <input type="hidden" class="posts-for-you--url-redirect" data-url="/ban-nha-dat-toan-quoc">
                @while ($query->have_posts())
                @php $query->the_post(); @endphp
                <div class="four wide column homepage-view padding-0-mobile-home">
                    {!! sage_post_link_open(get_post(), 'black', 'post-ocop-home') !!}
                    {!! sage_post_link_close() !!}
                    <div class="_post-basic-partial box">
                        {!! sage_post_link_open(get_post(), 'black', 'post-ocop-home') !!}
                        {!! sage_post_link_close() !!}
                        <div class="ui card" style="margin:0;">
                            {!! sage_post_link_open(get_post(), 'black', 'post-ocop-home') !!}
                                <div class="ui raised segment">
                                    {!! sage_thumbnail('thumb-medium', [
                                        'class' => 'thumbnail-avatar'
                                    ], get_post()) !!}
                                    <div class="post-media--overview">
                                        <div class="align-items">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16">
                                                <path fill="currentColor" d="M16 13.25A1.75 1.75 0 0 1 14.25 15H1.75A1.75 1.75 0 0 1 0 13.25V2.75C0 1.784.784 1 1.75 1h12.5c.966 0 1.75.784 1.75 1.75ZM1.75 2.5a.25.25 0 0 0-.25.25v10.5c0 .138.112.25.25.25h.94l.03-.03l6.077-6.078a1.75 1.75 0 0 1 2.412-.06L14.5 10.31V2.75a.25.25 0 0 0-.25-.25Zm12.5 11a.25.25 0 0 0 .25-.25v-.917l-4.298-3.889a.25.25 0 0 0-.344.009L4.81 13.5ZM7 6a2 2 0 1 1-3.999.001A2 2 0 0 1 7 6M5.5 6a.5.5 0 1 0-1 0a.5.5 0 0 0 1 0"></path>
                                            </svg>
                                            <span>3</span>
                                        </div>
                                    </div>
                                </div>
                            {!! sage_post_link_close() !!}
                            <div class="content" style="border-top:0;text-align:left">
                                {!! sage_post_link_open(get_post(), 'black', 'post-ocop-home') !!}
                                    <div class="header">
                                        <div class="text-primary" style="margin: 0; height: 45px;">
                                            <span style="font-weight: 500; font-size: 14px; line-height: 1.6;">{!! get_the_title(get_post()) !!}</span>
                                        </div>
                                    </div>
                                    <div class="meta row main-color text-primary-color" style="font-weight: bold; margin-top: 10px; display:flex; justify-content:space-between;">
                                        <span class="text-truncate-1" style="margin-right: auto; font-size: 16px; font-weight: 500;"> 3,35 tỷ </span>
                                        <span class="text-truncate-1" style=" font-size: 16px; font-weight: 500;"> 52 m² </span>
                                    </div>
                                    <div class="row meta primary" style="font-weight:bold; margin-top: 10px;">
                                        <span style="font-size: 14px; font-weight: 500; display: flex; align-items: center;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 48 48">
                                                <g fill="none" fill-rule="evenodd" clip-rule="evenodd">
                                                    <path fill="#8fbffa" d="M5 20.686c0-10.769 8.73-19.5 19.5-19.5S44 9.918 44 20.687c0 6.988-3.606 12.866-7.526 17.203c-3.932 4.352-8.326 7.316-10.237 8.506a3.26 3.26 0 0 1-3.474 0c-1.91-1.19-6.305-4.154-10.237-8.506C8.606 33.552 5 27.674 5 20.686"></path>
                                                    <path fill="#2859c5" d="M24 29a8 8 0 1 0 0-16a8 8 0 0 0 0 16"></path>
                                                </g>
                                            </svg>
                                            <span class="text-truncate-1 text-muted">Huyện Đông Anh, Hà Nội</span>
                                        </span>
                                    </div>
                                {!! sage_post_link_close() !!}
                                <div class="row" style="display:flex; justify-content:space-between; width:100%; margin-top:10px; align-items:center;">
                                    <a title="Bán đất đường Bắc Hồng, Đông Anh, dt 52m² full thổ cư – mặt tiền rộng 5m vuông vắn" class="black" href="https://thuviennhadat.vn/ban-dat-o-thi-tran-dong-anh/ban-dat-duong-bac-hong-dong-anh-dt-52m-full-tho-cu-mat-tien-rong-5m-vuong-van-pst153573.html?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=box_bds_danh_cho_ban.trang_chu">
                                        <span class="primary dated text-muted text-truncate-1" style="font-size: 12px !important;">Đăng hôm qua</span>
                                        <input type="hidden" id="hid_post_id_153573" value="153573">
                                        <input type="hidden" id="hid_post_status_153573" value="False">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endwhile
            </div>

            <div style="margin-top: 20px; display:flex; align-items: center; justify-content: center;">
                <a href="/ban-nha-dat-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=cta.box_bds_danh_cho_ban.trangchu" class="ui button btn-secondary btn-radius-2rem btn-all-posts" style=" font-weight: 500;">Xem tất cả</a>
            </div>
        </div>
    </div>
</div>
@php wp_reset_postdata(); @endphp