<header class="header-wrap bg-transparent relative z-8 w-full m-0">
	<div id="header" class="header header-sticky">
	    <div class="ui container header-container" style="margin:0 !important">
	        <div class="mobile-menu-button" style="width: 100% !important; padding: 4px 0;">
	            <div class="mobile-header" style="display: flex; justify-content: space-between; width: 100%; height: 50px">
	                <div class="ui menu-button" style="padding: 0; display: flex; gap: .5rem; align-items: center; color: var(--primary-color);margin-top: 4px;">
	                    <div id="menu-left-mobile">
	                        <a class="ui icon-button">
	                            <i class="large sidebar icon" style="margin: 0;"></i>
	                        </a>
	                    </div>
	                    <div id="notify-favorite-mobile" style="display:none">
	                        <a href="/tai-khoan/danh-sach-tin-da-luu" class="icon-button">
	                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 14 14">
	                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25" d="M6.992 12.395L1.597 7.4c-2.94-2.957 1.349-8.68 5.395-4.05c4.045-4.617 8.375 1.107 5.394 4.05z"></path>
	                            </svg>
	                        </a>
	                    </div>
	                </div>
	                <div class="logo-mobile-version" style="display:none">
	                    <a class="logo mobile-logo-scroll" href="/" style="display: flex; align-items: center; width: 100% !important; top: 4px; position: absolute;">
	                        <img id="logo-img-mobile" alt="Logo" src="https://cdn.thuviennhadat.vn/upload/images/logo/Logo-TVND.png" class="img-fluid" width="48" height="48" loading="lazy">
	                        <strong class="brand-name" style="font-size: 22px; padding-top: 0; padding-left: 5px;">
	                            <span class="br-1">ThuVien</span>
	                            <span class="br-2">NhaDat</span>
	                            <span class="br-3" style="top: -14px;">.vn</span>
	                        </strong>
	                    </a>
	                    <div class="mobile-search-scroll" style="display:none;">
	                        <div class="kinhdoanh-view mobile-search-container" style="display: none; margin-bottom: 2%;">
	                            <div class="ui icon input mobile-input-search">
	                                <input class="mobile-input-text" type="text" placeholder="Trên toàn quốc" readonly="">
	                                <div class="mobile-searchbox" id="mobile-searchbox"></div>
	                                <img src="https://cdn.thuviennhadat.vn/upload/bds/HomePage/magnifying-glass.png" class="mobile-search-icon" style="background-color: #4CAF50 !important; opacity: 5 !important; width: 28px; height: 28px; border-radius: 4px; position: absolute; right: 2%; " alt="Tìm kiếm" loading="lazy">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="flex-2 cs-search-container__mobile" style="display: none;">
	                <div class="ui action d-flex gap-x1 cs-search-box">
	                    <div class="flex-2 cs-search-box__imput">
	                        <form class="cs-search__form">
	                            <input class="w-100 cs-search__imput" placeholder="Căn hộ chung cư tại Quận 7 diện tích 68m²" value="">
	                        </form>
	                    </div>
	                    <div class="d-flex align-items-center cs-search-box__btn cs-search-box__btn-clear" style="display: none;">
	                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
	                            <path fill="currentColor" d="M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18C6.47 2 2 6.47 2 12s4.47 10 10 10s10-4.47 10-10S17.53 2 12 2m2.59 6L12 10.59L9.41 8L8 9.41L10.59 12L8 14.59L9.41 16L12 13.41L14.59 16L16 14.59L13.41 12L16 9.41z"></path>
	                        </svg>
	                    </div>
	                    <div class="ui button btn-secondary cs-search-box__btn-search" style="border-radius: 1rem !important;">
	                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
	                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314"></path>
	                        </svg>
	                    </div>
	                    <div class="cs-search-box__suggestion" style="display: none;">
	                        <div class="d-flex flex-direction-column gap-x2 cs-search-box__suggestion--result" style="display: none;">
	                            <div class="d-flex flex-direction-column cs-search-box__suggestion--content"></div>
	                        </div>
	                        <div class="d-flex flex-direction-column gap-x1 cs-search-box__suggestion--history">
	                            <div class="cs-search-box__suggestion--title">Tiếp tục tìm kiếm</div>
	                            <div class="d-flex flex-direction-column cs-search-box__suggestion--content" style="margin-bottom: .5rem;">
	                                <div class="d-flex gap-x2 align-items-center justify-content-space-between cs-search-box__entry-point" data-redirect="ban-nha-dat-thanh-pho-ha-noi?k=dự án&amp;" data-display="Tìm kiếm từ khóa “dự án”">
	                                    <div class="d-flex align-items-center icon">
	                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
	                                            <path fill="currentColor" fill-rule="evenodd" d="M5.079 5.069c3.795-3.79 9.965-3.75 13.783.069c3.82 3.82 3.86 9.993.064 13.788s-9.968 3.756-13.788-.064a9.81 9.81 0 0 1-2.798-8.28a.75.75 0 1 1 1.487.203a8.31 8.31 0 0 0 2.371 7.017c3.245 3.244 8.468 3.263 11.668.064c3.199-3.2 3.18-8.423-.064-11.668c-3.243-3.242-8.463-3.263-11.663-.068l.748.003a.75.75 0 1 1-.007 1.5l-2.546-.012a.75.75 0 0 1-.746-.747L3.575 4.33a.75.75 0 1 1 1.5-.008zm6.92 2.18a.75.75 0 0 1 .75.75v3.69l2.281 2.28a.75.75 0 1 1-1.06 1.061l-2.72-2.72V8a.75.75 0 0 1 .75-.75" clip-rule="evenodd"></path>
	                                        </svg>
	                                    </div>
	                                    <div class="flex-2">Tìm kiếm từ khóa “dự án”</div>
	                                    <div class="d-flex align-items-center">
	                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
	                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5l7 7l-7 7"></path>
	                                        </svg>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="d-flex flex-direction-column gap-x2 cs-search-box__suggestion--guid" style="display: none;">
	                                <span class="d-flex align-items-center gap-r05">
	                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
	                                        <path fill="#009BA1" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2m1 14a1 1 0 0 1-2 0v-5a1 1 0 0 1 2 0Zm-1-7a1 1 0 1 1 1-1a1 1 0 0 1-1 1"></path>
	                                    </svg> Nhập từ khóa bạn muốn tìm. Ví dụ: </span>
	                                <ul></ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="ui menu-top stackable grid container" style="width: 100% !important; margin-left: 0 !important; margin-right: 0 !important;">
	            <div class="row" style="padding: 0; justify-content:space-between; flex-wrap: nowrap;">
	                <div class="" style="display: flex; justify-content: start; align-items: center; padding:0;">
	                    <a title="Logo" href="/">
	                        <img id="logo-img" alt="Logo" src="https://cdn.thuviennhadat.vn/upload/images/logo/Logo-TVND.png" loading="lazy" class="img-fluid" width="84" height="84">
	                    </a>
	                    <div style="display:flex; flex-direction:column; margin-top:-15px">
	                        <a class="logo" href="/" style="margin-right: 10px; margin-left: 5px">
	                            <strong class="brand-name" style="font-size: 22px;">
	                                <span class="br-1">ThuVien</span>
	                                <span class="br-2">NhaDat</span>
	                                <span class="br-3">.vn</span>
	                            </strong>
	                        </a>
	                        <div href="/" class="logo" style="margin-top: -5px; margin-bottom: 5px;">
	                            <strong class="brand-name" style="padding: 0;">
	                                <span class="br-" style="margin-left: 8px; font-size: 10px; font-weight:400; opacity: 0.6;">Trang thông tin điện tử tổng hợp</span>
	                            </strong>
	                        </div>
	                        <div href="/" class="logo slg-tvnd" style="position:absolute; bottom: 8px">
	                            <span class="slogan-tvnd">...hiểu pháp lý, rõ quy hoạch, giao dịch nhanh...</span>
	                        </div>
	                    </div>
	                    <div class="ui simple dropdown item dropdown-container p-5 padding-header" tabindex="0">
	                        <a class="dropdown-title link-header text-primary text-bold" href="/ban-nha-dat-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header">Nhà đất bán</a>
	                        <div class="menu" tabindex="-1">
	                            <a href="/ban-can-ho-chung-cu-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Căn hộ chung cư </div>
	                            </a>
	                            <a href="/ban-nha-tai-dinh-cu-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà tái định cư </div>
	                            </a>
	                            <a href="/ban-chung-cu-mini-can-ho-dich-vu-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Chung cư mini, căn hộ dịch vụ </div>
	                            </a>
	                            <a href="/ban-nha-rieng-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà riêng </div>
	                            </a>
	                            <a href="/ban-nha-biet-thu-lien-ke-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà biệt thự, liền kề </div>
	                            </a>
	                            <a href="/ban-nha-mat-pho-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà mặt phố </div>
	                            </a>
	                            <a href="/ban-nha-pho-thuong-mai-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà phố thương mại </div>
	                            </a>
	                            <a href="/ban-shop-house-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Shophouse </div>
	                            </a>
	                            <a href="/ban-condotel-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Condotel </div>
	                            </a>
	                            <a href="/ban-dat-o-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Đất </div>
	                            </a>
	                            <a href="/ban-dat-nen-du-an-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Đất nền dự án </div>
	                            </a>
	                            <a href="/ban-kho-nha-xuong-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Kho, nhà xưởng </div>
	                            </a>
	                            <a href="/ban-bat-dong-san-khac-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Bất động sản khác </div>
	                            </a>
	                        </div>
	                    </div>
	                    <div class="ui simple dropdown item dropdown-container p-5 padding-header" tabindex="0">
	                        <a class="dropdown-title link-header text-primary text-bold" href="/cho-thue-nha-dat-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header">Nhà đất cho thuê</a>
	                        <div class="menu" tabindex="-1">
	                            <a href="/cho-thue-can-ho-chung-cu-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Căn hộ chung cư </div>
	                            </a>
	                            <a href="/cho-thue-chung-cu-mini-can-ho-dich-vu-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Chung cư mini, căn hộ dịch vụ </div>
	                            </a>
	                            <a href="/cho-thue-nha-rieng-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà riêng </div>
	                            </a>
	                            <a href="/cho-thue-nha-biet-thu-lien-ke-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà biệt thự, liền kề </div>
	                            </a>
	                            <a href="/cho-thue-nha-mat-pho-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà mặt phố </div>
	                            </a>
	                            <a href="/cho-thue-nha-pho-thuong-mai-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà phố thương mại </div>
	                            </a>
	                            <a href="/cho-thue-nha-tai-dinh-cu-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà tái định cư </div>
	                            </a>
	                            <a href="/cho-thue-shop-house-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Shophouse </div>
	                            </a>
	                            <a href="/cho-thue-condotel-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Condotel </div>
	                            </a>
	                            <a href="/cho-thue-nha-tro-phong-tro-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà trọ, phòng trọ </div>
	                            </a>
	                            <a href="/cho-thue-van-phong-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Văn phòng </div>
	                            </a>
	                            <a href="/cho-thue-cua-hang-ki-ot-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Mặt bằng kinh doanh, cửa hàng, kiot </div>
	                            </a>
	                            <a href="/cho-thue-kho-nha-xuong-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Kho, nhà xưởng </div>
	                            </a>
	                            <a href="/cho-thue-bat-dong-san-khac-toan-quoc?utm_source=thuviennhadat_trangchu&amp;utm_medium=internal&amp;utm_campaign=rao_vat_tu_trangchu&amp;utm_content=menu_header" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Bất động sản khác </div>
	                            </a>
	                        </div>
	                    </div>
	                    <div class="ui simple dropdown item dropdown-container p-5 padding-header" tabindex="0">
	                        <a class="dropdown-title link-header text-primary text-bold" href="/du-an-bat-dong-san">Dự án</a>
	                        <div class="menu" tabindex="-1">
	                            <a href="/du-an-can-ho-chung-cu" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Căn hộ chung cư </div>
	                            </a>
	                            <a href="/du-an-nha-tai-dinh-cu" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà tái định cư </div>
	                            </a>
	                            <a href="/du-an-cao-oc-van-phong" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Cao ốc văn phòng </div>
	                            </a>
	                            <a href="/du-an-dat-chan-nuoi" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Đất chăn nuôi </div>
	                            </a>
	                            <a href="/du-an-trung-tam-thuong-mai" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Trung tâm thương mại </div>
	                            </a>
	                            <a href="/du-an-biet-thu-lien-ke" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Biệt thự, liền kề </div>
	                            </a>
	                            <a href="/du-an-nha-mat-pho" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà mặt phố </div>
	                            </a>
	                            <a href="/du-an-nha-hem" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà hẻm </div>
	                            </a>
	                            <a href="/du-an-khu-do-thi-moi" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Khu đô thị mới </div>
	                            </a>
	                            <a href="/du-an-khu-phuc-hop" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Khu phức hợp </div>
	                            </a>
	                            <a href="/du-an-nha-o-xa-hoi" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Nhà ở xã hội </div>
	                            </a>
	                            <a href="/du-an-khu-cong-nghiep" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Khu công nghiệp </div>
	                            </a>
	                            <a href="/du-an-khac" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Dự án khác </div>
	                            </a>
	                            <a href="/du-an-shophouse" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Shophouse </div>
	                            </a>
	                            <a href="/du-an-dat-nen" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Đất nền </div>
	                            </a>
	                            <a href="/du-an-condotel" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Condotel </div>
	                            </a>
	                        </div>
	                    </div>
	                    <div class="ui simple dropdown item dropdown-container p-5 padding-header" tabindex="0">
	                        <a class="dropdown-title link-header text-primary text-bold">Môi giới</a>
	                        <div class="menu" tabindex="-1">
	                            <a href="/nha-moi-gioi" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Chuyên trang môi giới </div>
	                            </a>
	                            <a href="/moi-gioi" style="color:black;font-size:14px!important">
	                                <div class="item py-item"> Danh bạ môi giới </div>
	                            </a>
	                        </div>
	                    </div>
	                    <div id="mn-tt-bds" class="ui simple dropdown item dropdown-container p-5 padding-header" tabindex="0">
	                        <a class="dropdown-title link-header text-primary text-bold"> Thông tin BĐS <div class="floating ui red label lable-animation"></div>
	                        </a>
	                        <div class="menu" style="min-width:250px !important" tabindex="-1">
	                            <div class="item" style="padding: 8px 3px 8px 15px !important">
	                                <a href="/bang-gia-dat-moi-nhat-2026" style="color:black!important;"> Bảng giá đất 2026 <strong style="padding: 2px 5px; background-color: #DB2828; color: white; border-radius: 2px; font-size: 11px">Mới</strong>
	                                </a>
	                            </div>
	                            <div class="item" style="padding: 8px 3px 8px 15px !important">
	                                <a href="/phap-ly-nha-dat" style="color:black!important;"> Pháp lý nhà đất <i class="angle right icon" style="float:right; font-size:15px !important"></i>
	                                </a>
	                                <div class="menu">
	                                    <a class="item" href="/phap-ly-nha-dat/chinh-sach-moi-ve-nha-dat" style="color:black!important;">Chính sách mới về nhà đất</a>
	                                    <a class="item" href="/phap-ly-nha-dat/ho-so-thu-tuc-nha-dat" style="color:black!important;">Hồ sơ, thủ tục nhà đất</a>
	                                    <a class="item" href="/phap-ly-nha-dat/phap-luat-ve-bat-dong-san" style="color:black!important;">Pháp luật về bất động sản</a>
	                                    <a class="item" href="/phap-ly-nha-dat/quy-hoach-dat-dai" style="color:black!important;">Quy hoạch đất đai</a>
	                                    <a class="item" href="/phap-ly-nha-dat/thong-tin-bat-dong-san" style="color:black!important;">Thông tin bất động sản</a>
	                                    <a class="item" href="/phap-ly-nha-dat/tu-van-phap-ly-nha-dat" style="color:black!important;">Tư vấn pháp lý nhà đất</a>
	                                </div>
	                            </div>
	                            <div class="item" style="padding: 8px 3px 8px 15px !important">
	                                <a href="/bat-dong-san" style="color:black!important;"> Bất động sản <i class="angle right icon" style="float:right; font-size:15px !important"></i>
	                                </a>
	                                <div class="menu">
	                                    <a class="item" href="/bat-dong-san/du-an-nha-dat" style="color:black!important;">Dự án Nhà đất</a>
	                                    <a class="item" href="/bat-dong-san/mua-ban-nha-dat" style="color:black!important;">Mua bán Nhà đất</a>
	                                </div>
	                            </div>
	                            <div class="item" style="padding: 8px 3px 8px 15px !important">
	                                <a href="/cam-nang-nha-dat" style="color:black!important;"> Cẩm nang nhà đất <i class="angle right icon" style="float:right; font-size:15px !important"></i>
	                                </a>
	                                <div class="menu">
	                                    <a class="item" href="/cam-nang-nha-dat/kinh-nghiem-mua-ban-cho-thue" style="color:black!important;">Kinh nghiệm mua bán cho thuê</a>
	                                    <a class="item" href="/cam-nang-nha-dat/phong-thuy-nha-dat" style="color:black!important;">Phong thủy nhà đất</a>
	                                    <a class="item" href="/cam-nang-nha-dat/thuat-ngu-nha-dat" style="color:black!important;">Thuật ngữ nhà đất</a>
	                                    <a class="item" href="/cam-nang-nha-dat/vat-lieu-xay-dung" style="color:black!important;">Vật liệu xây dựng</a>
	                                </div>
	                            </div>
	                            <div class="item" style="padding: 8px 3px 8px 15px !important">
	                                <a href="/tai-chinh-bat-dong-san" style="color:black!important;"> Tài chính bất động sản </a>
	                            </div>
	                            <div class="item" style="padding: 8px 3px 8px 15px !important">
	                                <a href="/thi-truong-bat-dong-san" style="color:black!important;"> Thị trường bất động sản </a>
	                            </div>
	                            <div class="item" style="padding: 8px 3px 8px 15px !important">
	                                <a href="/khong-gian-song" style="color:black!important;"> Không gian sống <i class="angle right icon" style="float:right; font-size:15px !important"></i>
	                                </a>
	                                <div class="menu">
	                                    <a class="item" href="/khong-gian-song/nha-dep-vuon-dep" style="color:black!important;">Nhà đẹp, vườn đẹp</a>
	                                    <a class="item" href="/khong-gian-song/noi-that-ngoai-that" style="color:black!important;">Nội thất, ngoại thất</a>
	                                    <a class="item" href="/khong-gian-song/thiet-bi-gia-dung" style="color:black!important;">Thiết bị gia dụng</a>
	                                </div>
	                            </div>
	                            <div class="item" style="padding: 8px 3px 8px 15px !important">
	                                <a href="/phap-luat" style="color:black!important;"> Pháp luật <i class="angle right icon" style="float:right; font-size:15px !important"></i>
	                                </a>
	                                <div class="menu">
	                                    <a class="item" href="/phap-luat/chi-dao-dieu-hanh" style="color:black!important;">Chỉ đạo - Điều hành</a>
	                                    <a class="item" href="/phap-luat/dat-dai-va-nha-o" style="color:black!important;">Đất đai và Nhà ở</a>
	                                    <a class="item" href="/phap-luat/ha-tang-bat-dong-san" style="color:black!important;">Hạ tầng bất động sản</a>
	                                    <a class="item" href="/phap-luat/van-ban-moi" style="color:black!important;">Văn bản mới</a>
	                                </div>
	                            </div>
	                            <div class="item" style="padding: 8px 3px 8px 15px !important">
	                                <a href="/hoi-dap" style="color:black!important;"> Hỏi đáp Pháp luật nhà đất <i class="angle right icon" style="float:right; font-size:15px !important"></i>
	                                </a>
	                                <div class="menu">
	                                    <a class="item" href="/hoi-dap/boi-thuong-tai-dinh-cu" style="color:black!important;">Bồi thường, tái định cư</a>
	                                    <a class="item" href="/hoi-dap/dau-tu-xay-dung" style="color:black!important;">Đầu tư xây dựng</a>
	                                    <a class="item" href="/hoi-dap/giao-dich-nha-dat" style="color:black!important;">Giao dịch nhà đất</a>
	                                    <a class="item" href="/hoi-dap/hoi-dap-khac" style="color:black!important;">Hỏi đáp khác</a>
	                                    <a class="item" href="/hoi-dap/tai-chinh-nha-dat" style="color:black!important;">Tài chính nhà đất</a>
	                                    <a class="item" href="/hoi-dap/thu-tuc-hanh-chinh-nha-dat" style="color:black!important;">Thủ tục hành chính nhà đất</a>
	                                </div>
	                            </div>
	                            <div class="item" style="padding: 8px 3px 8px 15px !important">
	                                <a href="/van-ban-phap-luat-viet-nam" style="color:black!important;"> Văn bản Pháp luật </a>
	                            </div>
	                            <div class="item" style="padding: 8px 3px 8px 15px !important">
	                                <a style="color:black!important;"> Tiện ích hỗ trợ <i class="angle right icon" style="float:right; font-size:15px !important"></i>
	                                </a>
	                                <div class="menu">
	                                    <a class="item" href="/sap-nhap-tinh" style="color:black!important;">Tra cứu sáp nhập tỉnh</a>
	                                    <a class="item" href="/bang-gia-dat" style="color:black!important;">Tra cứu bảng giá đất</a>
	                                    <a class="item" href="/tinh-du-toan-vat-lieu-xay-nha" style="color:black!important;">Tính dự toán xây nhà</a>
	                                    <a class="item" href="/tinh-lai-suat-vay" style="color:black!important;">Tính lãi suất vay</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div style="display:flex; padding: 0;">
	                    <div id="content-login" class="item" style="display: flex; padding: 0; width: 100%; align-items: center; justify-content: flex-end; gap: .5rem;">
	                        <div id="notify-favorite"></div>
	                        <div id="notify-toast"></div>
	                        <div class="ui simple dropdown item user-sign-in" style="display: none; max-width: 100% !important; padding-right: 5px; padding-left: 5px; position: relative;" tabindex="0">
	                            <div class="text">
	                                <img class="ui avatar image user-avatar" style="margin-right: 0;" loading="lazy">
	                                <a id="user-login" class="dropdown-title user-login" style="color:black"></a>
	                            </div>
	                            <i class="dropdown icon" style="margin-left: 5px;"></i>
	                            <div class="menu menu-info-user" style="" tabindex="-1">
	                                <a href="/goi-hoi-vien/dang-ky" style="display: flex; border-top-left-radius: 1rem; border-top-right-radius: 1rem;">
	                                    <img src="https://cdn.thuviennhadat.vn/upload/bds/HomePage/BannerHVP1.png" style="width: calc(100% + 2px); height: auto; margin: 0 -1px; border-top-left-radius: 1rem; border-top-right-radius: 1rem; ">
	                                </a>
	                                <a class="item" href="/tai-khoan/tong-quan">
	                                    <img class="img-icon-account" src="/Assets/img/pie-chart.svg" alt="Tổng quan"> Tổng quan </a>
	                                <a class="item" href="/tai-khoan/quan-ly-tin-dang">
	                                    <img class="img-icon-account" src="/Assets/img/litsting.svg" alt="Quản lý tin đăng"> Quản lý tin đăng </a>
	                                <a class="item" href="/goi-hoi-vien/dang-ky" style="display:flex;">
	                                    <i class="users icon"></i>
	                                    <span>Gói hội viên</span>
	                                    <span class="ui red label small pull-right" style="margin: 0 0 0 4px;font-weight:500;font-size:12px">Tiết kiệm đến 40%</span>
	                                </a>
	                                <a class="item" href="/tai-khoan/quan-ly-khach-hang">
	                                    <img class="img-icon-account" src="/Assets/img/notebook.svg" alt="Quản lý khách hàng"> Quản lý khách hàng </a>
	                                <a class="item" href="/tai-khoan/quan-ly-khuyen-mai">
	                                    <img class="img-icon-account" src="/Assets/img/ticket-voucher.svg" alt="Quản lý khuyến mãi"> Quản lý khuyến mãi </a>
	                                <a class="item" href="/tai-khoan/danh-sach-tin-da-luu">
	                                    <img class="img-icon-account" src="/Assets/img/heart.svg" alt="Tin đăng đã lưu"> Tin đăng đã lưu </a>
	                                <a class="item" id="regist-now-header">
	                                    <img class="img-icon-account" style="margin-bottom: 0;" src="/Assets/img/office.svg" alt="Môi giới chuyên nghiệp"> Môi giới chuyên nghiệp </a>
	                                <a class="item" href="/tai-khoan/thong-tin-ca-nhan?type=1">
	                                    <img class="img-icon-account" src="https://cdn.thuviennhadat.vn//upload/bds/HomePage/gear_11386565.png" alt="Thay đổi thông tin cá nhân"> Thay đổi thông tin cá nhân </a>
	                                <a class="item" href="/giao-dich/nap-tien">
	                                    <i class="credit card icon img-icon-account"></i> Nạp tiền </a>
	                                <a class="item" id="user-sign-out" style="color:black;font-size:14px!important">
	                                    <img class="img-icon-account" src="https://cdn.thuviennhadat.vn/upload/bds/HomePage/logout.png" alt="icon-logout"> Đăng xuất </a>
	                            </div>
	                        </div>
	                        <div class="ui buttons login" style="justify-content: center; align-items: center;">
	                            <button class="ui left button login login-header text-primary" id="login-button">Đăng nhập</button>
	                            <div class="divider-header login-divider-header" style="display: block;"></div>
	                            <button class="right ui button login login-header text-primary" id="register-button">Đăng ký</button>
	                        </div>
	                        <a href="javascript:void(0);" class="ui button btn-secondary btn-radius-1rem" id="btnDangTin" style=" min-width: 82px; padding-left: 10px; padding-right: 10px; font-weight:500">Đăng tin</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <a href="#" id="backToTop" class="ui compact icon button back-to-top" style="z-index:1; margin-bottom:10%;">
	            <i class="arrow up icon"></i>
	        </a>
	    </div>
	</div>
</header>