{!! sage_get_sidebar_banner(1) !!}

@php 
$query = \App\Queries\MergedPostsQuery::breaking(6, ['post', 'event']); 
@endphp

@include('partials.blocks.breaking-posts', [
    'title' => 'Tin Nổi Bật',
    'query' => $query 
])

<div class="widget box mb-3 widget-posts blogsidebar3widget type-2">
    <div class="box-title widget-title mb-3 style_5">
        <div class="m-0 main-title">
            <span class="uppercase inner-title">Xu hướng</span>
        </div>
    </div>
    <div class="box-body widget-content">
        <div class="item">
            <a href="https://vntravel.org.vn/road-trip-viet-nam-2026-vi-sao-mua-xuan-la-thoi-diem-ly-tuong-nhat-a8347.html" title="Road Trip Việt Nam 2026: Vì sao mùa xuân là thời điểm lý tưởng nhất?" class="!flex !no-underline style_img_left mb-4">
                <div class="image image-wrapper mr-3">
                    <div class="image image-medium relative overflow-hidden block no-underline">
                        <img class="w-full min-h-full max-h-full !h-[67px] absolute top-0 left-0 object-cover" src="https://vntravel.org.vn/uploads/images/blog/haingan116/2026/03/19/img-2710-1773905362.jpg" alt="Road Trip Việt Nam 2026: Vì sao mùa xuân là thời điểm lý tưởng nhất?">
                    </div>
                </div>
                <div class="info-wrapper">
                    <h3 class="article-title clamp-4-lines"> Road Trip Việt Nam 2026: Vì sao mùa xuân là thời điểm lý tưởng nhất? </h3>
                    <div class="meta-news">
                        <span class="author-meta">Trần Như Hải Ngân</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="https://vntravel.org.vn/k-home-bai-toan-song-tien-nghi-nhung-van-tiet-kiem-a8345.html" title="K-Home: bài toán sống tiện nghi nhưng vẫn tiết kiệm" class="!flex !no-underline style_img_left mb-4">
                <div class="image image-wrapper mr-3">
                    <div class="image image-medium relative overflow-hidden block no-underline">
                        <img class="w-full min-h-full max-h-full !h-[67px] absolute top-0 left-0 object-cover" src="https://vntravel.org.vn/uploads/images/blog/lethytheu/2026/03/19/1-1773888845.png" alt="K-Home: bài toán sống tiện nghi nhưng vẫn tiết kiệm">
                    </div>
                </div>
                <div class="info-wrapper">
                    <h3 class="article-title clamp-4-lines"> K-Home: bài toán sống tiện nghi nhưng vẫn tiết kiệm </h3>
                    <div class="meta-news">
                        <span class="author-meta">Lê Thy Thêu</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="widget news-box box-category box-cate-featured box-cate-featured-vertical news-box-color inline-block w-full mb-[15px]">
    <div class="content-box-category">
        <div class="item-news full-thumb w-full bg-transparent pb-[10px] mb-[10px] border-b-0 float-left">
            <div class="match-height">
                <div class="thumb-art image image-wrapper relative overflow-hidden w-full mb-[10px]">
                    <a href="#" title="Gạo nếp hương Bảo Lạc đặc sản OCOP Cao Bằng" class="image image-medium relative block overflow-hidden">
                        <div class="gradient-background"></div>
                        <img alt="Gạo nếp hương Bảo Lạc đặc sản OCOP Cao Bằng" class="absolute w-full h-full object-cover left-0 top-0 lazy loaded" data-ll-status="loaded" src="https://doanhnghiepkinhtexanh.vn/zoom/480x288/uploads/blog/nguyenvantong/2026/03/23/nhcb-1774224103.png">
                    </a>
                    <h2 class="absolute text-white text-[22px] font-bold top-[10px] left-4 z-[1] cat">
                        <a class="!no-underline !text-white" href="https://doanhnghiepkinhtexanh.vn/c/quay-ocop" title="Quầy OCOP">Quầy OCOP</a>
                    </h2>
                </div>
                <div class="content">
                    <h3 class="title title-news">
                        <a class="!no-underline" href="https://doanhnghiepkinhtexanh.vn/gao-nep-huong-bao-lac-dac-san-ocop-cao-bang-a45866.html" title="Gạo nếp hương Bảo Lạc đặc sản OCOP Cao Bằng"> Gạo nếp hương Bảo Lạc đặc sản OCOP Cao Bằng </a>
                    </h3>
                    <div class="block description"> Gạo nếp hương Bảo Lạc - đặc sản núi rừng của tỉnh Cao Bằng - từ lâu đã trở thành... </div>
                </div>
            </div>
        </div>
        <div class="sub-news-cate">
            <div class="item">
                <h3>
                    <a href="https://doanhnghiepkinhtexanh.vn/ha-tinh-nuoc-mam-tu-lang-bien-ky-xuan-vuon-tam-san-pham-ocop-5-sao-a45861.html" title="Nước mắm từ làng biển Kỳ Xuân vươn tầm sản phẩm OCOP 5 sao"> Nước mắm từ làng biển Kỳ Xuân vươn tầm sản phẩm OCOP 5 sao </a>
                </h3>
            </div>
        </div>
        <div class="sub-news-cate">
            <div class="item">
                <h3>
                    <a href="https://doanhnghiepkinhtexanh.vn/vu-sua-hoang-kim-dac-san-miet-vuon-nam-bo-a45637.html" title="Vú sữa Hoàng Kim đặc sản miệt vườn Nam bộ"> Vú sữa Hoàng Kim đặc sản miệt vườn Nam bộ </a>
                </h3>
            </div>
        </div>
        <div class="sub-news-cate">
            <div class="item">
                <h3>
                    <a href="https://doanhnghiepkinhtexanh.vn/chuong-trinh-moi-xa-mot-san-pham-ocop-giup-nang-cao-gia-tri-san-pham-va-thuc-day-kinh-te-nong-thon-tai-hue-a45209.html" title="Chương trình &quot;Mỗi xã một sản phẩm&quot; OCOP giúp nâng cao giá trị sản phẩm và thúc đẩy kinh tế nông thôn tại Huế"> Chương trình "Mỗi xã một sản phẩm" OCOP giúp nâng cao giá trị sản phẩm và thúc đẩy kinh tế nông thôn tại Huế </a>
                </h3>
            </div>
        </div>
        <div class="sub-news-cate">
            <div class="item">
                <h3>
                    <a href="https://doanhnghiepkinhtexanh.vn/thuong-thuc-mang-rung-da-bac-dan-da-ma-dam-da-a45118.html" title="Thưởng thức măng rừng Đà Bắc Dân dã mà đậm đà"> Thưởng thức măng rừng Đà Bắc Dân dã mà đậm đà </a>
                </h3>
            </div>
        </div>
    </div>
</div>

<div class="widget">
    <div class="c-box p-[15px] border border-[#E5E5E5]">
        <div class="c-box__title pb-[10px]">
            <h2 class="c-box__title__name">Đọc nhiều</h2>
        </div>
        <div class="c-box__content">
            <div class="c-news-topread">
                <ul>
                    <li>
                        <div class="c-news-topread__number">
                            <span>1</span>
                        </div>
                        <h3 class="c-news-topread__title">
                            <a title="Ông Trump đổ lỗi cho Bộ trưởng Hegseth về cuộc chiến với Iran" href="https://congluan.vn/ong-trump-do-loi-cho-bo-truong-hegseth-ve-cuoc-chien-voi-iran-10335595.html">Ông Trump đổ lỗi cho Bộ trưởng Hegseth về cuộc chiến với Iran</a>
                        </h3>
                    </li>
                    <li>
                        <div class="c-news-topread__number">
                            <span>2</span>
                        </div>
                        <h3 class="c-news-topread__title">
                            <a title="Giá vàng 9h sáng nay 25/3/2026: Bật tăng mạnh mẽ" href="https://congluan.vn/gia-vang-9h-sang-nay-25-3-2026-bat-tang-manh-me-10335703.html">Giá vàng 9h sáng nay 25/3/2026: Bật tăng mạnh mẽ</a>
                        </h3>
                    </li>
                    <li>
                        <div class="c-news-topread__number">
                            <span>3</span>
                        </div>
                        <h3 class="c-news-topread__title">
                            <a title="Giá vàng chiều nay 23/3/2026: Thế giới mất 305 USD/ounce, vàng SJC ‘lao dốc không phanh’" href="https://congluan.vn/gia-vang-chieu-nay-23-3-2026-the-gioi-mat-305-usd-ounce-vang-sjc-lao-doc-khong-phanh-10335479.html">Giá vàng chiều nay 23/3/2026: Thế giới mất 305 USD/ounce, vàng SJC ‘lao dốc không phanh’</a>
                        </h3>
                    </li>
                    <li>
                        <div class="c-news-topread__number">
                            <span>4</span>
                        </div>
                        <h3 class="c-news-topread__title">
                            <a title="Từ ngày 1/4, hàng không Việt Nam tạm dừng khai thác nhiều đường bay" href="https://congluan.vn/tu-ngay-1-4-hang-khong-viet-nam-tam-dung-khai-thac-nhieu-duong-bay-10335573.html">Từ ngày 1/4, hàng không Việt Nam tạm dừng khai thác nhiều đường bay</a>
                        </h3>
                    </li>
                    <li>
                        <div class="c-news-topread__number">
                            <span>5</span>
                        </div>
                        <h3 class="c-news-topread__title">
                            <a title="Chiến tranh và lạm phát không còn cứu được giá vàng" href="https://congluan.vn/chien-tranh-va-lam-phat-khong-con-cuu-duoc-gia-vang-10335439.html">Chiến tranh và lạm phát không còn cứu được giá vàng</a>
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>