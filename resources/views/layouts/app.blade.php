<!doctype html>
<html @php(language_attributes())>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        @php(do_action('get_header')) 
        @php(wp_head()) 
        @vite([ 'resources/css/icon.min.css', 'resources/css/app.css', 'resources/css/main.scss', 'resources/js/jquery.js', 'resources/js/app.js' ])
    </head>
    <body @php(body_class())> 
        @php(wp_body_open()) 
        @include('sections.header') 
        <main class="section-main">
            <div class="section-main section-center">

        <!-- Background Image -->
        <div class="ui container main-first-mobile" style="margin-left: 0!important; margin-right:0!important;">

            <div class="slideshow-container">
                <div class="mobile-show tablet-no-show" style="padding: 10px; background-color: white; color: #072858;">
                    <div style="display: flex; justify-content: space-between; margin-top: 5px;">
                        <div style="display: flex; flex-direction: column;">
                            <a href="https://thuviennhadat.vn/lien-he.html" class="gop-y-hover" style="margin-right: 10px; font-size: 14px !important; color: blue !important;"><i class="envelope outline icon"></i> Mời góp ý</a>
                            <span style="margin-right:10px"><a href="https://zalo.me/thuviennhadat" target="_blank"><i class="comments icon"></i> Hỗ trợ qua Zalo</a></span>
                        </div>

                        <div style="display: flex; flex-direction: column;">
                            <a href="tel:0858229966" style="margin-right:10px; color:blue"><i class="mobile alternate icon"></i> 0858 22 99 66</a>
                            <a href="tel:02836224363" style="margin-right:10px; display: flex; align-items: center;"><img src="https://cdn.thuviennhadat.vn/upload/bds/HomePage/phone-call-black.png" width="13" style="margin-right:5px" alt="phone-call-black"> (028) 36 22 43 63</a>
                        </div>
                    </div>
                </div>
                <div class="slideshow-content">
                            <div class="mySlides fade img-slide" data-banner-id="banner_trangchu_top_47" style="cursor: pointer; display: block; height: 460px;">
                                <a href="/giao-dich/nap-tien?utm_source=homepage
&amp;utm_medium=banner
&amp;utm_campaign=nap_tien">
                                    <img src="https://cdn.thuviennhadat.vn/upload/bds/HomePage/BannerQcTVND03032026v6.png" class="lazy loaded" alt="bannerTet" fetchpriority="high">
                                </a>
                            </div>
                </div>

                <!-- Next and previous buttons -->
                <a href="#" class="prev disabled" disabled="disabled">❮</a>
                <a href="#" class="next disabled" disabled="disabled">❯</a>

                <div class="mobile-not-show tablet-no-show" style="position: absolute; top: 0; right: 0; padding: 5px 9px; background-color: #cef8f5; color: #072858;">
                    <span style="margin-right:10px"><a href="https://zalo.me/thuviennhadat" target="_blank"><i class="comments icon"></i> Hỗ trợ qua Zalo</a></span>
                    <span style="margin-right:10px; color:blue"><i class="mobile alternate icon"></i> 0858 22 99 66</span>
                    <span style="margin-right:10px; color:red"><i class="phone icon"></i> (028) 36 22 43 63</span>

                    <a href="https://thuviennhadat.vn/lien-he.html" class="mini ui blue basic button gop-y-hover" style="margin-right: 10px; font-size: 14px !important; color: blue !important; box-shadow: 0px 0px 0px 1px blue inset !important;"><i class="envelope outline icon"></i> Mời góp ý</a>
                </div>
<!-- Search Container -->

<div class="search-container" id="search-container">
    <div class="cs-search-container" id="Tab">

        <ul class="cs-search-container__tab">
            <li class="cs-search__tab-item active" data-type="sell">Mua bán</li>
            <li class="cs-search__tab-item" data-type="rent">Cho thuê</li>
            <li class="cs-search__tab-item" data-type="project">Dự án</li>
        </ul>
        <input type="hidden" id="cs-search__tab-actived" value="1" data-type="sell">
        <div class="cs-search-container__combobox">
            


<div class="ui action d-flex gap-x1 cs-search-box">
    <div class="d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314"></path>
        </svg>
    </div>
    <div class="flex-2 cs-search-box__imput">
        <form class="cs-search__form">
            <input class="w-100 cs-search__imput" value="" placeholder="Căn">
        </form>
    </div>
    <div class="d-flex align-items-center cs-search-box__btn cs-search-box__btn-clear" style="display: none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18C6.47 2 2 6.47 2 12s4.47 10 10 10s10-4.47 10-10S17.53 2 12 2m2.59 6L12 10.59L9.41 8L8 9.41L10.59 12L8 14.59L9.41 16L12 13.41L14.59 16L16 14.59L13.41 12L16 9.41z"></path>
        </svg>
    </div>
    <div class="d-flex gap-x1 align-items-center cs-search-box__selection">
            <div class="ui compact menu cs-search-box__selection--location">
                <div class="ui dropdown item" tabindex="0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                        <path fill="#4CAF50" d="M10.115 21.811c.606.5 1.238.957 1.885 1.403a27 27 0 0 0 1.885-1.403a28 28 0 0 0 2.853-2.699C18.782 16.877 21 13.637 21 10a9 9 0 1 0-18 0c0 3.637 2.218 6.876 4.262 9.112a28 28 0 0 0 2.853 2.7M12 13.25a3.25 3.25 0 1 1 0-6.5a3.25 3.25 0 0 1 0 6.5"></path>
                    </svg>
                    <span>Hà Nội</span>
                    <i class="dropdown icon"></i>
                </div>

                <div class="d-flex flex-direction-column gap-r05 cs-search-box__dropdown-panel" style="display: none;">
                    <div class="cs-search-box__dropdown-panel--main">
                        <div class="title">Chọn khu vực</div>
                        <input id="search-box__location-search-id" value="" data-friendly-url="" type="hidden">

                        <div class="scroll">
                            <div class="d-flex flex-direction-column gap-r1 cs-search-box__dropdown-menu">
                                <div class="cs-search-box__button city-selection">
                                    <label>Tỉnh / Thành phố</label>
                                    <i class="dropdown icon"></i>
                                </div>
                                <div class="cs-search-box__button ward-selection disabled">
                                    <label>Chọn phường / xã</label>
                                    <i class="dropdown icon"></i>
                                </div>
                                <div class="d-flex gap-r05">
                                    <div class="ui button basic cs-search-box__btn-clean-location">Bỏ chọn</div>
                                    <div class="ui button btn-secondary cs-search-box__btn-apply-location flex-2">Áp dụng</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Panel Tỉnh/Thành phố -->
                    <div class="cs-search-box__dropdown-panel--city" style="display: none;">
                        <div class="title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12"><path fill="currentColor" d="M10.5 6a.75.75 0 0 0-.75-.75H3.81l1.97-1.97a.75.75 0 0 0-1.06-1.06L1.47 5.47a.75.75 0 0 0 0 1.06l3.25 3.25a.75.75 0 0 0 1.06-1.06L3.81 6.75h5.94A.75.75 0 0 0 10.5 6"></path></svg>
                            <span>Chọn tỉnh / thành phố</span>
                        </div>
                        <div class="ui left icon input input-filter">
                            <input type="text" placeholder="Tìm tỉnh / thành phố">
                            <i class="search icon"></i>
                        </div>
                        <div class="scroll">
                            <div class="d-flex flex-direction-column cs-search-box__dropdown-menu" id="province-list">
                                <!-- JS sẽ load động -->
                            </div>
                        </div>
                    </div>

                    <!-- Panel Phường/Xã -->
                    <div class="cs-search-box__dropdown-panel--ward" style="display: none;">
                        <div class="title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12"><path fill="currentColor" d="M10.5 6a.75.75 0 0 0-.75-.75H3.81l1.97-1.97a.75.75 0 0 0-1.06-1.06L1.47 5.47a.75.75 0 0 0 0 1.06l3.25 3.25a.75.75 0 0 0 1.06-1.06L3.81 6.75h5.94A.75.75 0 0 0 10.5 6"></path></svg>
                            <span>Chọn phường / xã</span>
                        </div>
                        <div class="ui left icon input input-filter">
                            <input type="text" placeholder="Tìm phường / xã">
                            <i class="search icon"></i>
                        </div>
                        <div class="scroll">
                            <div class="d-flex flex-direction-column cs-search-box__dropdown-menu" id="ward-list">
                                <!-- JS sẽ load động -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui compact menu cs-search-box__selection--category">
                <div class="ui dropdown item" tabindex="0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="color: var(--secondary-color)"><path fill="currentColor" d="M3 21V7h4V3h10v8h4v10h-8v-4h-2v4zm2-2h2v-2H5zm0-4h2v-2H5zm0-4h2V9H5zm4 4h2v-2H9zm0-4h2V9H9zm0-4h2V5H9zm4 8h2v-2h-2zm0-4h2V9h-2zm0-4h2V5h-2zm4 12h2v-2h-2zm0-4h2v-2h-2z"></path></svg>
                    <span>Căn hộ chung cư</span>
                    <i class="dropdown icon"></i>
                <div class="menu" tabindex="-1"></div></div>
                <div class="d-flex flex-direction-column gap-r05 cs-search-box__dropdown-panel" style="display: none;">
                    <div class="title">
                        Chọn loại hình nhà đất
                    </div>
                    <div class="scroll">
                        <div class="d-flex flex-direction-column cs-search-box__dropdown-menu"><div class="d-flex cs-search-box__dropdown-item">
                        <div class="ui radio checkbox">
                            <input type="radio" value="" data-display-name="Tất cả loại hình" name="cs-search__category-checkbox" data-friendly-url="nha-dat" checked="checked" tabindex="0" class="hidden">
                            <label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1m10 0h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1M10 13H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1m7 0a4 4 0 1 1-3.995 4.2L13 17l.005-.2A4 4 0 0 1 17 13"></path>
                                </svg>
                        Tất cả loại hình</label>
                            </div>
                        </div><div class="d-flex cs-search-box__dropdown-item">
                            <div class="ui radio checkbox checked">
                                <input type="radio" value="1" data-display-name="Căn hộ chung cư" data-friendly-url="can-ho-chung-cu" name="cs-search__category-checkbox" tabindex="0" class="hidden">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M3 21V7h4V3h10v8h4v10h-8v-4h-2v4zm2-2h2v-2H5zm0-4h2v-2H5zm0-4h2V9H5zm4 4h2v-2H9zm0-4h2V9H9zm0-4h2V5H9zm4 8h2v-2h-2zm0-4h2V9h-2zm0-4h2V5h-2zm4 12h2v-2h-2zm0-4h2v-2h-2z"></path></svg>
                                    Căn hộ chung cư
                                </label>
                            </div>
                        </div><div class="d-flex cs-search-box__dropdown-item">
                            <div class="ui radio checkbox">
                                <input type="radio" value="24" data-display-name="Nhà tái định cư" data-friendly-url="nha-tai-dinh-cu" name="cs-search__category-checkbox" tabindex="0" class="hidden">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M15 22a1 1 0 0 1-1-1v-4a1 1 0 0 1 .445-.832l3-2a1 1 0 0 1 1.11 0l3 2A1 1 0 0 1 22 17v4a1 1 0 0 1-1 1zm3-12a8 8 0 0 0-16 0c0 4.993 5.539 10.193 7.399 11.799a1 1 0 0 0 .601.2M18 22v-3"></path><circle cx="10" cy="10" r="3"></circle></g></svg>
                                    Nhà tái định cư
                                </label>
                            </div>
                        </div><div class="d-flex cs-search-box__dropdown-item">
                            <div class="ui radio checkbox">
                                <input type="radio" value="2" data-display-name="Chung cư mini, căn hộ dịch vụ" data-friendly-url="chung-cu-mini-can-ho-dich-vu" name="cs-search__category-checkbox" tabindex="0" class="hidden">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect><path d="M9 22v-4h6v4M8 6h.01M16 6h.01M12 6h.01M12 10h.01M12 14h.01M16 10h.01M16 14h.01M8 10h.01M8 14h.01"></path></g></svg>
                                    Chung cư mini, căn hộ dịch vụ
                                </label>
                            </div>
                        </div><div class="d-flex cs-search-box__dropdown-item">
                            <div class="ui radio checkbox">
                                <input type="radio" value="3" data-display-name="Nhà riêng" data-friendly-url="nha-rieng" name="cs-search__category-checkbox" tabindex="0" class="hidden">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M12.662 21H5a2 2 0 0 1-2-2v-9a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v2.475"></path><path d="M14.959 12.717A1 1 0 0 0 14 12h-4a1 1 0 0 0-1 1v8m6-3h6m-3-3v6"></path></g></svg>
                                    Nhà riêng
                                </label>
                            </div>
                        </div><div class="d-flex cs-search-box__dropdown-item">
                            <div class="ui radio checkbox">
                                <input type="radio" value="4" data-display-name="Nhà biệt thự, liền kề" data-friendly-url="nha-biet-thu-lien-ke" name="cs-search__category-checkbox" tabindex="0" class="hidden">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M3 19V9.375q0-.625.35-1.137t.925-.738L14.65 3.525q.5-.2.925.1T16 4.45V12h1q0-.825.588-1.412T19 10t1.413.588T21 12v7q0 .825-.587 1.413T19 21H5q-.825 0-1.412-.587T3 19m2 0h4v-5q0-.825.588-1.412T11 12h3V5.9L5 9.375zm6 0h3v-2q0-.425.288-.712T15 16t.713.288T16 17v2h3v-5h-8zm4-2.5"></path></svg>
                                    Nhà biệt thự, liền kề
                                </label>
                            </div>
                        </div><div class="d-flex cs-search-box__dropdown-item">
                            <div class="ui radio checkbox">
                                <input type="radio" value="5" data-display-name="Nhà mặt phố" data-friendly-url="nha-mat-pho" name="cs-search__category-checkbox" tabindex="0" class="hidden">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M2 20V10l6-6l6 6v10zm2-2h3v-3h2v3h3v-7.175l-4-4l-4 4zm3-5v-2h2v2zm9 7V9.175L10.825 4h2.825L18 8.35V20zm4 0V7.525L16.475 4H19.3L22 6.7V20zM4 18h8z"></path></svg>
                                    Nhà mặt phố
                                </label>
                            </div>
                        </div><div class="d-flex cs-search-box__dropdown-item">
                            <div class="ui radio checkbox">
                                <input type="radio" value="6" data-display-name="Nhà phố thương mại" data-friendly-url="nha-pho-thuong-mai" name="cs-search__category-checkbox" tabindex="0" class="hidden">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M4 6V4h16v2zm0 14v-6H3v-2l1-5h16l1 5v2h-1v6h-2v-6h-4v6zm2-2h6v-4H6zm-.95-6h13.9zm0 0h13.9l-.6-3H5.65z"></path></svg>
                                    Nhà phố thương mại
                                </label>
                            </div>
                        </div><div class="d-flex cs-search-box__dropdown-item">
                            <div class="ui radio checkbox">
                                <input type="radio" value="7" data-display-name="Shophouse" data-friendly-url="shop-house" name="cs-search__category-checkbox" tabindex="0" class="hidden">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M5.025 21q-.825 0-1.412-.587T3.025 19v-7.95q-.575-.525-.887-1.35t-.013-1.8l1.05-3.4q.2-.65.713-1.075T5.075 3h13.9q.675 0 1.175.413t.725 1.087l1.05 3.4q.3.975-.012 1.775t-.888 1.375V19q0 .825-.587 1.413T19.025 21zm9.2-11q.675 0 1.025-.462t.275-1.038l-.55-3.5h-1.95v3.7q0 .525.35.913t.85.387m-4.5 0q.575 0 .938-.388t.362-.912V5h-1.95l-.55 3.5q-.1.6.262 1.05t.938.45m-4.45 0q.45 0 .787-.325t.413-.825L7.025 5h-1.95l-1 3.35q-.15.5.162 1.075T5.275 10m13.5 0q.725 0 1.05-.575t.15-1.075L18.925 5h-1.9l.55 3.85q.075.5.413.825t.787.325m-13.75 9h14v-7.05q-.125.05-.162.05h-.088q-.675 0-1.187-.225t-1.013-.725q-.45.45-1.025.7t-1.225.25q-.675 0-1.263-.25t-1.037-.7q-.425.45-.987.7T9.825 12q-.725 0-1.312-.25t-1.038-.7q-.525.525-1.037.738T5.275 12h-.112q-.063 0-.138-.05zm14 0h-14z"></path></svg>
                                    Shophouse
                                </label>
                            </div>
                        </div><div class="d-flex cs-search-box__dropdown-item">
                            <div class="ui radio checkbox">
                                <input type="radio" value="8" data-display-name="Condotel" data-friendly-url="condotel" name="cs-search__category-checkbox" tabindex="0" class="hidden">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Zm0-10H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2M10 6h4m-4 4h4m-4 4h4m-4 4h4"></path></svg>
                                    Condotel
                                </label>
                            </div>
                        </div><div class="d-flex cs-search-box__dropdown-item">
                            <div class="ui radio checkbox">
                                <input type="radio" value="9" data-display-name="Đất" data-friendly-url="dat-o" name="cs-search__category-checkbox" tabindex="0" class="hidden">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 21h4m-2 0V11m0-5V3M6 6h10l2 2.5l-2 2.5H6z"></path></svg>
                                    Đất
                                </label>
                            </div>
                        </div><div class="d-flex cs-search-box__dropdown-item">
                            <div class="ui radio checkbox">
                                <input type="radio" value="10" data-display-name="Đất nền dự án" data-friendly-url="dat-nen-du-an" name="cs-search__category-checkbox" tabindex="0" class="hidden">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 19l-4-2l-6 3V7l6-3l6 3l6-3v6.5M9 4v13m6-10v5m6 3h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3H17m2 0v1m0-8v1"></path></svg>
                                    Đất nền dự án
                                </label>
                            </div>
                        </div><div class="d-flex cs-search-box__dropdown-item">
                            <div class="ui radio checkbox">
                                <input type="radio" value="11" data-display-name="Kho, nhà xưởng" data-friendly-url="kho-nha-xuong" name="cs-search__category-checkbox" tabindex="0" class="hidden">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M4 19h2v-8h12v8h2V8.35l-8-3.2l-8 3.2zm-2 2V7l10-4l10 4v14h-6v-8H8v8zm7 0v-2h2v2zm2-3v-2h2v2zm2 3v-2h2v2zM6 11h12z"></path></svg>
                                    Kho, nhà xưởng
                                </label>
                            </div>
                        </div><div class="d-flex cs-search-box__dropdown-item">
                            <div class="ui radio checkbox">
                                <input type="radio" value="12" data-display-name="Bất động sản khác" data-friendly-url="bat-dong-san-khac" name="cs-search__category-checkbox" tabindex="0" class="hidden">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 21V8l9-4l9 4v13"></path><path d="M13 13h4v8H7v-6h6"></path><path d="M13 21v-9a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v3"></path></g></svg>
                                    Bất động sản khác
                                </label>
                            </div>
                        </div></div>
                    </div>
                </div>
            </div>
    </div>
    <div class="ui button btn-secondary cs-search-box__btn-search">Tìm kiếm</div>
</div>

        </div>
    </div>
</div>

                <div class="dot-container">
                </div>
            </div>

        </div>
    </div>

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
                            <div class="four wide column homepage-view padding-0-mobile-home">
                                <a title="Bán đất đường Bắc Hồng, Đông Anh, dt 52m² full thổ cư – mặt tiền rộng 5m vuông vắn" class="black" href="https://thuviennhadat.vn/ban-dat-o-thi-tran-dong-anh/ban-dat-duong-bac-hong-dong-anh-dt-52m-full-tho-cu-mat-tien-rong-5m-vuong-van-pst153573.html?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=box_bds_danh_cho_ban.trang_chu"></a>
                                <div class="_post-basic-partial box">
                                    <a title="Bán đất đường Bắc Hồng, Đông Anh, dt 52m² full thổ cư – mặt tiền rộng 5m vuông vắn" class="black" href="https://thuviennhadat.vn/ban-dat-o-thi-tran-dong-anh/ban-dat-duong-bac-hong-dong-anh-dt-52m-full-tho-cu-mat-tien-rong-5m-vuong-van-pst153573.html?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=box_bds_danh_cho_ban.trang_chu"></a>
                                    <div class="ui card" style="margin:0;">
                                        <a title="Bán đất đường Bắc Hồng, Đông Anh, dt 52m² full thổ cư – mặt tiền rộng 5m vuông vắn" class="black" href="https://thuviennhadat.vn/ban-dat-o-thi-tran-dong-anh/ban-dat-duong-bac-hong-dong-anh-dt-52m-full-tho-cu-mat-tien-rong-5m-vuong-van-pst153573.html?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=box_bds_danh_cho_ban.trang_chu">
                                            <div class="ui raised segment">
                                                <img class="thumbnail-avatar" alt="Bán đất đường Bắc Hồng, Đông Anh, dt 52m² full thổ cư – mặt tiền rộng 5m vuông vắn" src="https://cdn.thuviennhadat.vn/Upload/images/post-image/20260331/2603312001575103-82278-375769064376019869_n.jpg" loading="lazy" srcset="https://cdn.thuviennhadat.vn/Upload/images/post-image/20260331/2603312001575103-82278-375769064376019869_n.jpg 2x, https://cdn.thuviennhadat.vn/Upload/images/post-image/20260331/2603312001575103-82278-375769064376019869_n.jpg 3x" onerror="this.src='https://cdn.thuviennhadat.vn/upload/bds/HomePage/defaultTVND.png'">
                                                <div class="post-media--overview">
                                                    <div class="align-items">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16">
                                                            <path fill="currentColor" d="M16 13.25A1.75 1.75 0 0 1 14.25 15H1.75A1.75 1.75 0 0 1 0 13.25V2.75C0 1.784.784 1 1.75 1h12.5c.966 0 1.75.784 1.75 1.75ZM1.75 2.5a.25.25 0 0 0-.25.25v10.5c0 .138.112.25.25.25h.94l.03-.03l6.077-6.078a1.75 1.75 0 0 1 2.412-.06L14.5 10.31V2.75a.25.25 0 0 0-.25-.25Zm12.5 11a.25.25 0 0 0 .25-.25v-.917l-4.298-3.889a.25.25 0 0 0-.344.009L4.81 13.5ZM7 6a2 2 0 1 1-3.999.001A2 2 0 0 1 7 6M5.5 6a.5.5 0 1 0-1 0a.5.5 0 0 0 1 0"></path>
                                                        </svg>
                                                        <span>3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="content" style="border-top:0;text-align:left">
                                            <a title="Bán đất đường Bắc Hồng, Đông Anh, dt 52m² full thổ cư – mặt tiền rộng 5m vuông vắn" class="black" href="https://thuviennhadat.vn/ban-dat-o-thi-tran-dong-anh/ban-dat-duong-bac-hong-dong-anh-dt-52m-full-tho-cu-mat-tien-rong-5m-vuong-van-pst153573.html?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=box_bds_danh_cho_ban.trang_chu">
                                                <div class="header">
                                                    <div class="text-primary" style="margin: 0; height: 45px;">
                                                        <span style="font-weight: 500; font-size: 14px; line-height: 1.6;">Bán đất đường bắc hồng, đông anh, dt 52m² full thổ cư – mặt tiền rộng 5m vuông vắn</span>
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
                                            </a>
                                            <div class="row" style="display:flex; justify-content:space-between; width:100%; margin-top:10px; align-items:center;">
                                                <a title="Bán đất đường Bắc Hồng, Đông Anh, dt 52m² full thổ cư – mặt tiền rộng 5m vuông vắn" class="black" href="https://thuviennhadat.vn/ban-dat-o-thi-tran-dong-anh/ban-dat-duong-bac-hong-dong-anh-dt-52m-full-tho-cu-mat-tien-rong-5m-vuong-van-pst153573.html?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=box_bds_danh_cho_ban.trang_chu">
                                                    <span class="primary dated text-muted text-truncate-1" style="font-size: 12px !important;">Đăng hôm qua</span>
                                                    <input type="hidden" id="hid_post_id_153573" value="153573">
                                                    <input type="hidden" id="hid_post_status_153573" value="False">
                                                </a>
                                                <div class="save-button-partial-view" style="">
                                                    <a title="Bán đất đường Bắc Hồng, Đông Anh, dt 52m² full thổ cư – mặt tiền rộng 5m vuông vắn" class="black" href="https://thuviennhadat.vn/ban-dat-o-thi-tran-dong-anh/ban-dat-duong-bac-hong-dong-anh-dt-52m-full-tho-cu-mat-tien-rong-5m-vuong-van-pst153573.html?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=box_bds_danh_cho_ban.trang_chu"></a>
                                                    <a id="saved-post-153573" onclick="saveOrUnSavePost(153573, 2)" data-tooltip="Bấm để lưu tin" data-inverted="" data-position="bottom center">
                                                        <img id="icon-status-saved-post-153573" class="unit-icon icon-status-saved-post-153573" src="https://cdn.thuviennhadat.vn/upload/bds/DABDS/TRI/heart.png" loading="lazy" alt="icon-status-saved-post-153573">
                                                    </a>
                                                </div>
                                                <style>
                                                    .save-button-partial-view {
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 38px !important;
                                                        height: 38px !important;
                                                        border-radius: 2rem;
                                                        cursor: pointer;
                                                        position: relative;
                                                        border: 1px solid rgba(0, 0, 0, 0.25);
                                                    }

                                                    .save-button-partial-view:hover {
                                                        background-color: #faf9f7;
                                                        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05), 0 -1px 2px 0 rgba(0, 0, 0, 0.05), 1px 0 2px 0 rgba(0, 0, 0, 0.05), -1px 0 2px 0 rgba(0, 0, 0, 0.05);
                                                    }

                                                    .unit-icon {
                                                        width: 20px;
                                                        height: 20px;
                                                        object-fit: contain;
                                                        color: #888;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin-top: 20px; display:flex; align-items: center; justify-content: center;">
                            <a href="/ban-nha-dat-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=cta.box_bds_danh_cho_ban.trangchu" class="ui button btn-secondary btn-radius-2rem btn-all-posts" style=" font-weight: 500;">Xem tất cả</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-main" style="padding: 10px 0;">
                <div class="ui container stackable">
                    <div style="margin-top:30px;">
                        <div class="ui grid mobile-margin-bottom-10" style="margin-bottom: 20px">
                            <div class="row" style=" align-items: center; padding:0;">
                                <div class="sixteen wide mobile eight wide tablet eight wide computer column left floated">
                                    <span class="title-content">Tin nhà đất bán mới nhất</span>
                                </div>
                                <div class="eight wide tablet eight wide computer only column"></div>
                            </div>
                        </div>

                        <div class="posts-sale-new-container" style="padding: 0;">
                            <div class="slider-wrap">
                                <div>
                                    <div class="slide" style="width: 100%; display: inline-block;">
                                        <a title="Hiệp Phước Premia ưu đãi 10,5% – vị trí đón đầu Vành đai 4 &amp; Metro 4" class="black" href="https://thuviennhadat.vn/ban-dat-nen-du-an-xa-tan-tap/hiep-phuoc-premia-uu-dai-105-vi-tri-don-dau-vanh-dai-4-metro-4-pst153830.html?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=box_bds_ban_moi_nha.trang_chu" tabindex="-1"></a>
                                        <div class="_post-basic-partial box">
                                            <a title="Hiệp Phước Premia ưu đãi 10,5% – vị trí đón đầu Vành đai 4 &amp; Metro 4" class="black" href="https://thuviennhadat.vn/ban-dat-nen-du-an-xa-tan-tap/hiep-phuoc-premia-uu-dai-105-vi-tri-don-dau-vanh-dai-4-metro-4-pst153830.html?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=box_bds_ban_moi_nha.trang_chu" tabindex="-1"></a>
                                            <div class="ui card" style="margin:0;">
                                                <a title="Hiệp Phước Premia ưu đãi 10,5% – vị trí đón đầu Vành đai 4 &amp; Metro 4" class="black" href="https://thuviennhadat.vn/ban-dat-nen-du-an-xa-tan-tap/hiep-phuoc-premia-uu-dai-105-vi-tri-don-dau-vanh-dai-4-metro-4-pst153830.html?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=box_bds_ban_moi_nha.trang_chu" tabindex="-1">
                                                    <div class="ui raised segment">
                                                        <img class="thumbnail-avatar" alt="Hiệp Phước Premia ưu đãi 10,5% – vị trí đón đầu Vành đai 4 &amp; Metro 4" src="https://cdn.thuviennhadat.vn/Upload/images/post-image/20260401/2604011427316307-57713-ng-hiep-phuoc-premia.jpg" loading="lazy" srcset="https://cdn.thuviennhadat.vn/Upload/images/post-image/20260401/2604011427316307-57713-ng-hiep-phuoc-premia.jpg 2x, https://cdn.thuviennhadat.vn/Upload/images/post-image/20260401/2604011427316307-57713-ng-hiep-phuoc-premia.jpg 3x" onerror="this.src='https://cdn.thuviennhadat.vn/upload/bds/HomePage/defaultTVND.png'">
                                                        <div class="post-media--overview">
                                                            <div class="align-items">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16">
                                                                    <path fill="currentColor" d="M16 13.25A1.75 1.75 0 0 1 14.25 15H1.75A1.75 1.75 0 0 1 0 13.25V2.75C0 1.784.784 1 1.75 1h12.5c.966 0 1.75.784 1.75 1.75ZM1.75 2.5a.25.25 0 0 0-.25.25v10.5c0 .138.112.25.25.25h.94l.03-.03l6.077-6.078a1.75 1.75 0 0 1 2.412-.06L14.5 10.31V2.75a.25.25 0 0 0-.25-.25Zm12.5 11a.25.25 0 0 0 .25-.25v-.917l-4.298-3.889a.25.25 0 0 0-.344.009L4.81 13.5ZM7 6a2 2 0 1 1-3.999.001A2 2 0 0 1 7 6M5.5 6a.5.5 0 1 0-1 0a.5.5 0 0 0 1 0"></path>
                                                                </svg>
                                                                <span>6</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="content" style="border-top:0;text-align:left">
                                                    <a title="Hiệp Phước Premia ưu đãi 10,5% – vị trí đón đầu Vành đai 4 &amp; Metro 4" class="black" href="https://thuviennhadat.vn/ban-dat-nen-du-an-xa-tan-tap/hiep-phuoc-premia-uu-dai-105-vi-tri-don-dau-vanh-dai-4-metro-4-pst153830.html?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=box_bds_ban_moi_nha.trang_chu" tabindex="-1">
                                                        <div class="header">
                                                            <div class="text-primary" style="margin: 0; height: 45px;">
                                                                <span style="font-weight: 500; font-size: 14px; line-height: 1.6;">Hiệp phước premia ưu đãi 10,5% – vị trí đón đầu vành đai 4 &amp; metro 4</span>
                                                            </div>
                                                        </div>
                                                        <div class="meta row main-color text-primary-color" style="font-weight: bold; margin-top: 10px; display:flex; justify-content:space-between;">
                                                            <span class="text-truncate-1" style="margin-right: auto; font-size: 16px; font-weight: 500;"> Thỏa thuận </span>
                                                            <span class="text-truncate-1" style=" font-size: 16px; font-weight: 500;"> 80 m² </span>
                                                        </div>
                                                        <div class="row meta primary" style="font-weight:bold; margin-top: 10px;">
                                                            <span style="font-size: 14px; font-weight: 500; display: flex; align-items: center;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 48 48">
                                                                    <g fill="none" fill-rule="evenodd" clip-rule="evenodd">
                                                                        <path fill="#8fbffa" d="M5 20.686c0-10.769 8.73-19.5 19.5-19.5S44 9.918 44 20.687c0 6.988-3.606 12.866-7.526 17.203c-3.932 4.352-8.326 7.316-10.237 8.506a3.26 3.26 0 0 1-3.474 0c-1.91-1.19-6.305-4.154-10.237-8.506C8.606 33.552 5 27.674 5 20.686"></path>
                                                                        <path fill="#2859c5" d="M24 29a8 8 0 1 0 0-16a8 8 0 0 0 0 16"></path>
                                                                    </g>
                                                                </svg>
                                                                <span class="text-truncate-1 text-muted">Huyện Cần Giuộc, Long An</span>
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <div class="row" style="display:flex; justify-content:space-between; width:100%; margin-top:10px; align-items:center;">
                                                        <a title="Hiệp Phước Premia ưu đãi 10,5% – vị trí đón đầu Vành đai 4 &amp; Metro 4" class="black" href="https://thuviennhadat.vn/ban-dat-nen-du-an-xa-tan-tap/hiep-phuoc-premia-uu-dai-105-vi-tri-don-dau-vanh-dai-4-metro-4-pst153830.html?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=box_bds_ban_moi_nha.trang_chu" tabindex="-1">
                                                            <span class="primary dated text-muted text-truncate-1" style="font-size: 12px !important;">Đăng hôm nay</span>
                                                            <input type="hidden" id="hid_post_id_153830" value="153830" tabindex="-1">
                                                            <input type="hidden" id="hid_post_status_153830" value="False" tabindex="-1">
                                                        </a>
                                                        <div class="save-button-partial-view" style="">
                                                            <a title="Hiệp Phước Premia ưu đãi 10,5% – vị trí đón đầu Vành đai 4 &amp; Metro 4" class="black" href="https://thuviennhadat.vn/ban-dat-nen-du-an-xa-tan-tap/hiep-phuoc-premia-uu-dai-105-vi-tri-don-dau-vanh-dai-4-metro-4-pst153830.html?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=box_bds_ban_moi_nha.trang_chu" tabindex="-1"></a>
                                                            <a id="saved-post-153830" onclick="saveOrUnSavePost(153830, 2)" data-tooltip="Bấm để lưu tin" data-inverted="" data-position="bottom center" tabindex="-1">
                                                                <img id="icon-status-saved-post-153830" class="unit-icon icon-status-saved-post-153830" src="https://cdn.thuviennhadat.vn/upload/bds/DABDS/TRI/heart.png" loading="lazy" alt="icon-status-saved-post-153830">
                                                            </a>
                                                        </div>
                                                        <style>
                                                            .save-button-partial-view {
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                width: 38px !important;
                                                                height: 38px !important;
                                                                border-radius: 2rem;
                                                                cursor: pointer;
                                                                position: relative;
                                                                border: 1px solid rgba(0, 0, 0, 0.25);
                                                            }

                                                            .save-button-partial-view:hover {
                                                                background-color: #faf9f7;
                                                                box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05), 0 -1px 2px 0 rgba(0, 0, 0, 0.05), 1px 0 2px 0 rgba(0, 0, 0, 0.05), -1px 0 2px 0 rgba(0, 0, 0, 0.05);
                                                            }

                                                            .unit-icon {
                                                                width: 20px;
                                                                height: 20px;
                                                                object-fit: contain;
                                                                color: #888;
                                                            }
                                                        </style>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display:flex; align-items: center; justify-content: center;">
                        <a href="/ban-nha-dat-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=cta.xemthemnhadatban.trangchu" class="ui button btn-secondary btn-radius-2rem btn-all-posts btn-all-posts-sale" style=" font-weight: 500;">Xem thêm tin bán</a>
                    </div>
                </div>
            </div>

            <div class="section-main">
                <div class="ui container">
                    <!-- Bất động sản theo địa điểm -->
                    <div style="margin-top:20px;">
                        <div style="margin-bottom: 20px">
                            <span class="title-content">Khu vực</span>
                        </div>

                        <div class="ui stackable grid">
                            <div class="row">
                                <div id="homepage-img1" class="eight wide column">
                                    <a title="Bán nhà TP. Hồ Chí Minh" href="/ban-nha-dat-thanh-pho-ho-chi-minh">
                                        <div id="image1-hcm" class="city-card card-box box-shadow" style="height: 313px;">
                                            <img id="image1" src="https://cdn.thuviennhadat.vn//upload/bds/HomePage/sai-gon-la-do-thi-soi-dong.png" alt="Thành phố Hồ Chí Minh" style="height: 313px; aspect-ratio: 16/9; object-fit: cover; " loading="lazy">
                                            <div class="content">
                                                <h2 id="caption1">TP. Hồ Chí Minh</h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div id="homepage-img1" class="eight wide column stackable" style="display: flex; flex-direction: column; justify-content: space-between; padding-left: 0rem!important">
                                    <div class="ui grid homegape-four-image">
                                        <div id="mobile-padding-img-2" class="eight wide column">
                                            <a title="Bán nhà Hà Nội" href="/ban-nha-dat-thanh-pho-ha-noi">
                                                <div class="image2 city-card card-box box-shadow" style="height: 150px; ">
                                                    <img id="image2" src="https://cdn.thuviennhadat.vn/upload/bds/HomePage/ha-noi1.jpg" alt="Đồng Nai" style="height: 186px; aspect-ratio: 16/9; object-fit: cover;" loading="lazy">
                                                    <div class="content">
                                                        <h2 id="caption2">Hà Nội</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="mobile-padding-img-3" class="eight wide column">
                                            <a title="Bán nhà Đà Nẵng" href="/ban-nha-dat-thanh-pho-da-nang">
                                                <div class="image3 city-card card-box box-shadow" style="height: 150px; ">
                                                    <img id="image3" src="https://cdn.thuviennhadat.vn/upload/bds/HomePage/da-nang1.jpg" alt="Đồng Nai" style="height: 186px; aspect-ratio: 16/9; object-fit: cover;" loading="lazy">
                                                    <div class="content">
                                                        <h2 id="caption3">Đà Nẵng</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="mobile-padding-img-4" class="eight wide column">
                                            <a title="Bán nhà Bình Dương" href="/ban-nha-dat-tinh-binh-duong">
                                                <div class="image4 city-card card-box box-shadow" style="height: 150px; ">
                                                    <img id="image4" src="https://cdn.thuviennhadat.vn/upload/bds/HomePage/binh-duong1.jpg" alt="Đồng Nai" style="height: 186px; aspect-ratio: 16/9; object-fit: cover;" loading="lazy">
                                                    <div class="content">
                                                        <h2 id="caption4">Bình Dương</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="mobile-padding-img-5" class="eight wide column">
                                            <a title="Bán nhà Đồng Nai" href="/ban-nha-dat-tinh-dong-nai">
                                                <div class="image5 city-card card-box box-shadow" style="height: 150px; ">
                                                    <img id="image5" src="https://cdn.thuviennhadat.vn/upload/bds/HomePage/dong-nai1.jpeg" alt="Đồng Nai" style="height: 186px;  aspect-ratio: 16/9; object-fit:cover;" loading="lazy">
                                                    <div class="content">
                                                        <h2 id="caption5">Đồng Nai</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>

        </main> 
        @include('sections.footer') 
        @php(do_action('get_footer')) 
        @php(wp_footer()) 
        @yield('scripts')
    </body>
</html>