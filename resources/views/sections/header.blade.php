<header class="header-wrap bg-transparent relative z-8 min-h-[60px] w-full m-0">
	<div class="header-wrap-inner border-b-1 border-b-[#ebebeb]">
		<div class="py-3 hidden xl:block header-top">
			<div class="container mx-auto">
				<nav class="bg-transparent flex justify-between items-center">
					<a href="{{ home_url('/') }}" class="flex overflow-hidden items-center max-w-[270px] max-h-[150px]">
						<img class="h-full w-auto max-w-full max-h-[inherit] pt-[5px] pb-[5px] object-contain" src="{{ asset('images/logo.png') }}" alt="Logo">
					</a>
					@include('partials.search-form')

					<div class="flex items-center flex-row">
						<div class="info-box-wrapper flex grow items-center pl-[10px] pr-[10px]">
							<a class="!no-underline flex flex-row items-stretch px-[10px]" href="#" target="_blank" title="RSS">
								<div class="header-icon relative flex flex-none items-center justify-center leading-[0]">
									<div class="info-box-icon text-[#00438A] text-[30px]">
										<i class="hgi hgi-stroke hgi-rss text-2xl"></i>
									</div>
								</div>
							</a>

							<a class="!no-underline flex flex-row items-stretch px-[10px]" href="#" target="_blank" title="Facebook">
								<div class="header-icon relative flex flex-none items-center justify-center leading-[0]">
									<div class="info-box-icon text-[#00438A] text-[30px]">
										<i class="hgi hgi-stroke hgi-facebook-01 text-2xl"></i>
									</div>
								</div>
							</a>

							<a class="!no-underline flex flex-row items-stretch px-[10px]" href="#" target="_blank" title="Youtube">
								<div class="header-icon relative flex flex-none items-center justify-center leading-[0]">
									<div class="info-box-icon text-[#00438A] text-[30px]">
										<i class="hgi hgi-stroke hgi-youtube text-2xl"></i>
									</div>
								</div>
							</a>

							<div class="item type-button flex flex-row items-stretch px-[10px]">
								<a href="#" target="_blank" class="bg-[#00438A] border border-[#00438A] !no-underline !text-white text-sm font-normal inline-block text-center px-3 py-1.5 min-w-[90px] rounded-[50px] cursor-pointer transition duration-150 ease-in-out leading-normal">Đăng ký</a>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>

	<!-- Mobile Menu Start -->
	<div class="xl:border-0 sticky-header bg-[#6697a1]">
		<div class="sm:px-0 px-3 pb-4 pt-3 block xl:hidden">
			<div class="container">
				<div class="flex justify-between items-center">
					<div>
						<button class="btn btn-default border-1 border-[#fff] inline-flex items-center justify-center size-12 rounded-[50px]" id="sidebar-menu-btn">
						    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						        <path d="M20 12L10 12" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
						        <path d="M20 5L4 5" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
						        <path d="M20 19L4 19" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
						    </svg>
						</button>
					</div>
					<div>
						<a href="{{ home_url('/') }}">
					        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-[120px] md:w-[150px]">
					    </a>
					</div>
					<div class="search-bar-wrapper relative inline-flex items-center h-full px-2" x-data="{ open: false }">
					    <!-- Search Icon Link -->
					    <a href="#!" @click.prevent="open = true">
					        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="search" class="text-white lucide lucide-search w-5 h-5 stroke-2 transition-colors duration-300">
					            <circle cx="11" cy="11" r="8"></circle>
					            <path d="m21 21-4.3-4.3"></path>
					        </svg>
					    </a>
					    <!-- Search Modal -->
					    <div x-show="open" class="absolute top-full right-0 w-full z-30" x-transition="" style="display: none;">
					        <div class="bg-white rounded-xs p-3 w-[400px] relative" style="left: calc(100% - 400px); box-shadow: 0px 30px 50px -10px rgba(0, 0, 0, 0.15);">
					            <h2 class="text-lg text-black dark:text-white font-bold mb-4">Tìm kiếm</h2>
					            @include('partials.search-form')
					            <div class="flex justify-end mt-2">
					                <button @click="open = false" class=" bg-black text-white px-4 py-2 absolute top-0 rtl:left-0 ltr:right-0">x</button>
					            </div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Mobile Menu End -->
</header>