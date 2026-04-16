var arrPlaceholder = [
    "Căn hộ chung cư tại Thủ Đức",
    "Nhà riêng tại Quận 1 giá 8 tỷ",
    "Căn hộ chung cư tại Quận 7 diện tích 68m²",
    "Nhà riêng tại quận Ba Đình 3 phòng ngủ",
];
var arrPlaceholderProject = [
    "The Global City",
    "Masteri Thảo Điền"
];
var isPlaceholderRunning = true;
var placeholderTimer = null;
var displayPlaceholder = '';
var suggetionLoaded = null;
var initialSearchBoxLocation = true;

(function($) {
    "use strict";
    initial();
})(jQuery);

function initial() {

    loadProvinces();

    fetchCategories();

    $('.cs-search__imput').focus(function () {
        $('.cs-search-box__suggestion--history').show();
        $('.cs-search-box__suggestion--result').hide();
        $('.cs-search-box__suggestion').slideDown('fast');
        $(".cs-search__imput").attr("placeholder", null);
        $(".cs-search-box__backdrop").show();
        isPlaceholderRunning = false;
    })

    $('.cs-search__imput').on('input', function () {
        $('.cs-search-box__btn-clear').show();
    });

    $('.cs-search-box__btn-clear').click(function () {
        $(this).hide();
        clearSearchKey()
    })

    $('.cs-search-box__btn-search').click(function () {
        submitSearch($(this).parent().find('.cs-search__imput').val());
    })

    $('.cs-search__form').submit(function (e) {
        e.preventDefault();
        submitSearch($(this).find('.cs-search__imput').val());
    })

    $('.cs-search__tab-item').click(function () {
        const newType = $(this).data('type');

        if ($('#cs-search__tab-actived').attr('data-type') === newType) return;

        $('.cs-search__tab-item').removeClass('active');
        $(this).addClass('active');

        let transaction = 1;
        if (newType === 'project') {
            transaction = 3;
            $('.cs-search-box__selection--category').hide();
        } else if (newType === 'rent') {
            transaction = 2;
            $('.cs-search-box__selection--category').show();
        } else {
            transaction = 1;
            $('.cs-search-box__selection--category').show();
        }

        $('#cs-search__tab-actived').val(transaction).attr('data-type', newType);

        // Reload category theo tab
        fetchCategories(transaction);

        // Reset tìm kiếm
        $('.cs-search__imput').val(null);
        $('.cs-search-box__btn-clear').hide();
        resetPlaceholderRunning();
        displayHistory();
    });

    $('.cs-search-box__selection--location .dropdown.item').click(function () {
        $('.cs-search-box__selection--location .cs-search-box__dropdown-panel').toggle();
        $('.cs-search-box__dropdown-panel--main').show();
        $('.cs-search-box__dropdown-panel--city').hide();
        $('.cs-search-box__dropdown-panel--ward').hide();
    });

    $('.cs-search-box__selection--category .dropdown.item').click(function () {
        $('.cs-search-box__selection--category .cs-search-box__dropdown-panel').toggle();
    });

    $('.cs-search-box__button.city-selection').click(function () {
        $('.cs-search-box__dropdown-panel--main').hide();
        $('.cs-search-box__dropdown-panel--city').show();
    });

    $('.cs-search-box__button.ward-selection').click(function () {
        if ($(this).hasClass('disabled')) return;
        $('.cs-search-box__dropdown-panel--main').hide();
        $('.cs-search-box__dropdown-panel--ward').show();
    });

    $('.cs-search-box__dropdown-panel .title svg').click(function () {
        $('.cs-search-box__dropdown-panel--main').show();
        $('.cs-search-box__dropdown-panel--city').hide();
        $('.cs-search-box__dropdown-panel--ward').hide();
    });

    //Chọn tỉnh thành
    $(document).on('change', 'input[name="cs-search__city-checkbox"]', function () {
        let $this = $(this);
        let provinceCode = $this.val();
        let displayName = $this.data("display-name") || 'Chọn tỉnh thành';

        resetWardSelection();

        if (provinceCode) {
            $('.cs-search-box__button.ward-selection').removeClass('disabled');
            fetchWards(provinceCode);
            $('.cs-search-box__button.city-selection label').html(displayName);
        } else {
            $('.cs-search-box__button.ward-selection').addClass('disabled');
            $('.cs-search-box__button.city-selection label').html('Chọn tỉnh thành');
        }
        $('.cs-search-box__dropdown-panel .title svg').click();
    });

    $('.cs-search-box__dropdown-panel--city .input-filter input').on('input', CommonModule.debounce(function () {
        filterLocation($(this).val(), 'cs-search-box__dropdown-panel--city');
    }, 300));

    $('.cs-search-box__dropdown-panel--ward .input-filter input').on('input', CommonModule.debounce(function () {
        filterLocation($(this).val(), 'cs-search-box__dropdown-panel--ward');
    }, 300));

    $('.cs-search-box__btn-apply-location').click(function () {
        const $ward = $('input[name="cs-search__ward-checkbox"]:checked');
        const $city = $('input[name="cs-search__city-checkbox"]:checked');

        let displayName = 'Khu vực';
        let locationSearchId = '';
        let locationSearchUrl = 'toan-quoc';

        if ($city.val() && $ward.val()) {
            displayName = $ward.data("display-name");
            locationSearchId = 'w' + $ward.val();
            locationSearchUrl = $ward.attr('data-friendly-url');
            updateSearchBoxStorage('', $city.val(), null, $ward.val(), '');
        } else if ($city.val()) {
            displayName = $city.data("display-name");
            locationSearchId = 'c' + $city.val();
            locationSearchUrl = $city.attr('data-friendly-url');
            updateSearchBoxStorage('', $city.val(), null, null, '');
        }

        $('.cs-search-box__selection--location .dropdown span').html(displayName);
        $('.cs-search-box__selection--location .cs-search-box__dropdown-panel').hide();
        $('#search-box__location-search-id').val(locationSearchId).attr('data-friendly-url', locationSearchUrl);
    });

    $('.cs-search-box__btn-clean-location').click(function () {
        $('input[name="cs-search__city-checkbox"][value=""]').prop('checked', true).trigger('change');
    });

    // Load ban đầu nếu có dữ liệu lưu
    let searchBoxStorage = getSearchBoxStorage();
    if (searchBoxStorage && searchBoxStorage.cityId) {
        $(`input[name="cs-search__city-checkbox"][value="${searchBoxStorage.cityId}"]`).prop('checked', true).trigger('change');
    }
    
    $(document).on("click", function (event) {
        let targetDiv = $(".cs-search__imput");
        if (!targetDiv.is(event.target) && targetDiv.has(event.target).length === 0) {
            $('.cs-search-box__suggestion').hide();
            $(".cs-search-box__backdrop").hide();
            if (!isPlaceholderRunning) {
                isPlaceholderRunning = true;
                displayPlaceholderRunning();
            }
        }
    });

    //Sự kiện đóng panel chọn loại hình
    $(document).on("click", function (event) {
        let targetDiv = $(".cs-search-box__selection--category .dropdown");
        if (!targetDiv.is(event.target) && targetDiv.has(event.target).length === 0) {
            $('.cs-search-box__selection--category .cs-search-box__dropdown-panel').hide();
        }
    });

    ///Sự kiện đóng panel chọn khu vực
    $(document).on("click", function (event) {
        let targetDiv = $(".cs-search-box__selection--location");
        if (!targetDiv.is(event.target) && targetDiv.has(event.target).length === 0) {
            $('.cs-search-box__selection--location .cs-search-box__dropdown-panel').hide();
        }
    });

    $(document).on('click', '.cs-search-box__entry-point', function (e) {
        let redirectUrl = $(this).data('redirect');
        let displayName = $(this).data('display');
        redirectToSearchPage(displayName, redirectUrl);
    });

    displayPlaceholder = arrPlaceholder[Math.floor(Math.random() * arrPlaceholder.length)];
    displayPlaceholderRunning();
    displayHistory();
}

function fetchCategories(transactionType = 1) {
    $('.cs-search-box__selection--category .dropdown').addClass('loading');

    $.ajax({
        url: actdAjax.ajaxurl,
        type: 'GET',
        data: {
            action: 'get_categories_by_tab',
            transaction: transactionType
        },
        success: function (res) {
            if (res.success) {
                let items = `<div class="d-flex cs-search-box__dropdown-item">
                    <div class="ui radio checkbox">
                        <input type="radio" value="" data-display-name="Tất cả loại hình" name="cs-search__category-checkbox" data-friendly-url="nha-dat" checked>
                        <label><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="currentColor" d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1m10 0h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1M10 13H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1m7 0a4 4 0 1 1-3.995 4.2L13 17l.005-.2A4 4 0 0 1 17 13" /></svg> Tất cả loại hình</label>
                    </div>
                </div>`;

                res.data.forEach(c => {
                    items += `<div class="d-flex cs-search-box__dropdown-item">
                        <div class="ui radio checkbox">
                            <input type="radio" value="${c.Id}" data-display-name="${c.CategoryName}" data-friendly-url="${c.FriendlyUrl}" name="cs-search__category-checkbox">
                            <label>${c.ImageIcon || ''} ${c.CategoryName}</label>
                        </div>
                    </div>`;
                });

                $('.cs-search-box__selection--category .cs-search-box__dropdown-menu').html(items);

                $('.cs-search-box__selection--category .checkbox.radio').checkbox({
                    onChecked: function () {
                        const $transaction = $('#cs-search__tab-actived');
                        let displayname = $(this).val() ? $(this).data("display-name") : 'Loại hình';
                        updateSearchBoxStorage($transaction.val(), '', '', '', $(this).val());
                        $('.cs-search-box__selection--category .dropdown span').html(displayname);
                        $('.cs-search-box__selection--category .cs-search-box__dropdown-panel').hide();
                    }
                });
            }
        },
        complete: function () {
            $('.cs-search-box__selection--category .dropdown').removeClass('loading');
        }
    });
}

function resetWardSelection() {
    $('input[name="cs-search__ward-checkbox"]').prop('checked', false);
    $('.cs-search-box__button.ward-selection label').html('Chọn phường / xã');
    $('#ward-list').html(`
        <div class="cs-search-box__dropdown-item">
            <div class="ui radio checkbox">
                <input type="radio" value="" data-display-name="Tất cả phường xã" name="cs-search__ward-checkbox">
                <label>Tất cả phường / xã</label>
            </div>
        </div>
    `);
}

function loadProvinces() {
    $.ajax({
        url: actdAjax.ajaxurl,
        type: 'GET',
        data: { action: 'get_provinces' },
        success: function (res) {
            if (res.success) {
                let html = `<div class="cs-search-box__dropdown-item">
                    <div class="ui radio checkbox">
                        <input type="radio" value="" data-display-name="Toàn quốc" data-friendly-url="toan-quoc" name="cs-search__city-checkbox">
                        <label>Toàn quốc</label>
                    </div>
                </div>`;

                res.data.forEach(p => {
                    html += `<div class="cs-search-box__dropdown-item">
                        <div class="ui radio checkbox">
                            <input type="radio" value="${p.province_code}" 
                                   data-display-name="${p.name}" 
                                   data-friendly-url="${p.friendly_url || p.short_name}" 
                                   name="cs-search__city-checkbox">
                            <label>${p.name}</label>
                        </div>
                    </div>`;
                });

                $('#province-list').html(html);
                $('.cs-search-box__dropdown-panel--city .checkbox.radio').checkbox();
            }
        }
    });
}

function fetchWards(provinceCode) {
    $('.cs-search-box__button.ward-selection').addClass('loading');

    $.ajax({
        url: actdAjax.ajaxurl,
        type: 'GET',
        data: { 
            action: 'get_wards_by_province',
            province_code: provinceCode 
        },
        success: function (res) {
            let html = `<div class="cs-search-box__dropdown-item">
                <div class="ui radio checkbox">
                    <input type="radio" value="" data-display-name="Tất cả phường xã" name="cs-search__ward-checkbox">
                    <label>Tất cả phường / xã</label>
                </div>
            </div>`;

            if (res.success && res.data.length) {
                res.data.forEach(w => {
                    html += `<div class="cs-search-box__dropdown-item">
                        <div class="ui radio checkbox">
                            <input type="radio" value="${w.ward_code}" 
                                   data-display-name="${w.name}" 
                                   data-friendly-url="${w.friendly_url || w.ward_code}" 
                                   name="cs-search__ward-checkbox">
                            <label>${w.name}</label>
                        </div>
                    </div>`;
                });
            }

            $('#ward-list').html(html);
            $('.cs-search-box__dropdown-panel--ward .checkbox.radio').checkbox();

            // Bind event khi chọn phường xã
            $('.cs-search-box__dropdown-panel--ward .ui.radio.checkbox').checkbox({
                onChecked: function () {
                    let displayName = $(this).data("display-name") || 'Chọn phường xã';
                    $('.cs-search-box__button.ward-selection label').html(displayName);
                    $('.cs-search-box__dropdown-panel .title svg').click();
                }
            });
        },
        complete: function () {
            $('.cs-search-box__button.ward-selection').removeClass('loading');
        }
    });
}

function filterLocation(input, className) {
    const keyword = (input || "").toLowerCase().trim();
    const $items = $(`.${className} .cs-search-box__dropdown-item`);

    if (!keyword) {
        $items.show();
        return;
    }

    $items.each(function () {
        const name = $(this).find('label').text().toLowerCase();
        $(this).toggle(name.includes(keyword));
    });
}


// ====================== SUBMIT SEARCH – TẤT CẢ TAB ĐỀU LÀ CATEGORY ======================
function submitSearch(input) {
    let keyword = (input || "").trim();
    const $category = $('input[name="cs-search__category-checkbox"]:checked');
    const $location = $('.cs-search-box__selection--location #search-box__location-search-id');

    let type = $('.cs-search__tab-item.active').data('type');
    
    let path = '';

    if (type === 'project') {
        path = 'du-an-bat-dong-san';                    // giữ nguyên nếu bạn vẫn muốn dùng slug này
    } else {
        // ==================== SỬA Ở ĐÂY ====================
        let cptSlug = (type === 'rent') ? 'nha-dat-thue' : 'nha-dat-ban';
        path = cptSlug;

        let categorySlug = ($category.length > 0 && $category.val() !== "") 
            ? $category.attr('data-friendly-url') 
            : null;

        if (categorySlug) {
            path += `/${categorySlug}`;
        }
    }

    let params = new URLSearchParams();
    if (keyword) params.append('q', keyword);

    // province_code & ward_code (đã đúng, giữ nguyên)
    const locationId = $location.val() || '';
    if (locationId.startsWith('c')) {
        params.append('province_code', locationId.substring(1));
    } else if (locationId.startsWith('w')) {
        params.append('ward_code', locationId.substring(1));
    }

    let queryString = params.toString() ? '?' + params.toString() : '';
    let finalPath = '/' + path + queryString;   // thêm / đầu cho an toàn

    redirectToSearchPage(null, finalPath);
}
// ====================== REDIRECT – ĐỘNG ROOT DOMAIN ======================
function redirectToSearchPage(displayName, redirectUrl) {
    let type = $('.cs-search__tab-item.active').data('type') == 'project' ? 'project' : 'post';

    if (displayName) {
        saveSearchHistory(displayName, redirectUrl, type);
    }

    let utmTrackings = [
        'utm_source=ancutudo_khungtimkiem',
        'utm_medium=internal',
        'utm_campaign=danh_sach_tin_dang'
    ];

    let currentPage = window.location.pathname;
    if (currentPage === "/") {
        utmTrackings.push('utm_content=box_goi_y_tim_kiem.trang_chu');
    } else {
        utmTrackings.push('utm_content=box_goi_y_tim_kiem.danh_sach');
    }

    let utmParams = utmTrackings.join('&');

    let finalUrl = actdAjax.homeurl + (redirectUrl.startsWith('/') ? redirectUrl.slice(1) : redirectUrl);

    if (finalUrl.includes('?')) {
        finalUrl += "&" + utmParams;
    } else {
        finalUrl += "?" + utmParams;
    }

    window.location.href = finalUrl;
}

function saveSearchHistory(displayName, redirectUrl, type) {
    let strSearchHistoryLocals = localStorage.getItem('actd-search-history');
    let searchHistoryLocals = [];
    if (strSearchHistoryLocals) {
        searchHistoryLocals = JSON.parse(strSearchHistoryLocals);
    }
    searchHistoryLocals = searchHistoryLocals.filter(c => c.DisplayName != displayName)
    if (searchHistoryLocals.filter(c => c.Type == type).length >= 10) {
        searchHistoryLocals.splice(searchHistoryLocals.lastIndexOf(c => c.Type = type), 1);
    }
    searchHistoryLocals.unshift({
        DisplayName: displayName,
        RedirectUrl: redirectUrl,
        Type: type
    });
    localStorage.setItem('actd-search-history', JSON.stringify(searchHistoryLocals));
}

function displayHistory() {
    let type = $('.cs-search__tab-item.active').data('type') == 'project' ? 'project' : 'post';
    let strSearchHistoryLocals = localStorage.getItem('actd-search-history');
    if (strSearchHistoryLocals) {
        $('.cs-search-box__suggestion--history .cs-search-box__suggestion--content').empty();
        let searchHistoryLocals = JSON.parse(strSearchHistoryLocals).filter(c => c.Type == type);
        if (searchHistoryLocals.length > 0) {
            searchHistoryLocals.forEach(item => {
                $('.cs-search-box__suggestion--history .cs-search-box__suggestion--content').append(buildHistoryItem(item.DisplayName, item.RedirectUrl));
            });
            $('.cs-search-box__suggestion--guid').hide();
        }
        else {
            displaySearchGuid();
        }
    }
    else {
        displaySearchGuid();
    }
}

function displaySearchGuid() {
    let arrDisplay = [];
    if ($('.cs-search__tab-item.active').data('type') == 'project') {
        arrDisplay = arrPlaceholderProject
    }
    else {
        arrDisplay = arrPlaceholder;
    }
    $('.cs-search-box__suggestion--guid').show();
    $('.cs-search-box__suggestion--title').hide();
    $('.cs-search-box__suggestion--guid ul').empty();
    arrDisplay.forEach(item => {
        $('.cs-search-box__suggestion--guid ul').append(`<li>${item}</li>`);
    });
}

function displayPlaceholderRunning(i = 0) {
    clearTimeout(placeholderTimer);
    if (!isPlaceholderRunning) {
        return;
    }
    let words = displayPlaceholder.split("");
    $(".cs-search__imput").attr("placeholder", words.slice(0, i + 1).join(""));
    if (i + 1 < words.length) {
        placeholderTimer = setTimeout(() => { displayPlaceholderRunning(i + 1) }, 100);
    } else {
        placeholderTimer = setTimeout(() => {
            $(".cs-search__imput").attr("placeholder", null);
            resetPlaceholderRunning();
        }, 3000);
    }
}

function resetPlaceholderRunning() {
    let dataType = $('.cs-search__tab-item.active').data('type');
    if (dataType == 'project') {
        displayPlaceholder = arrPlaceholderProject[Math.floor(Math.random() * arrPlaceholderProject.length)];
    } else {
        displayPlaceholder = arrPlaceholder[Math.floor(Math.random() * arrPlaceholder.length)];
    }
    displayPlaceholderRunning();
}

function clearSearchKey() {
    $('.cs-search-box__btn-clear').hide();
    $('.cs-search__imput').val(null).focus();
    $('.cs-search-box__suggestion--history').show();
    $('.cs-search-box__suggestion--result').hide();
    $('.cs-search-box__suggestion--result .cs-search-box__suggestion--content').empty();
}

function highlightKeyword(text, keyword) {
    if (!keyword) return text;
    const words = keyword
        .trim()
        .split(/\s+/)
        .filter(Boolean);
    if (words.length === 0) return text;
    const escaped = words.map(w => w.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'));
    const regex = new RegExp('(' + escaped.join('|') + ')', 'gi');
    return text.replace(regex, '<b>$1</b>');
}

function buildSuggestionItem(input, displayName, redirectUrl) {
    let keyword = input;
    return `
        <div class="d-flex gap-x2 align-items-center justify-content-space-between cs-search-box__entry-point" data-redirect="${redirectUrl}" data-display='${displayName}'>
            <div class="d-flex align-items-center icon">
                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314" />
                 </svg>
            </div>
            <div class="flex-2">${highlightTextNoAccent(displayName, keyword)}</div>
            <div class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5l7 7l-7 7" />
                </svg>
            </div>
        </div>`;
};

function buildHistoryItem(displayName, redirectUrl) {
    return `
        <div class="d-flex gap-x2 align-items-center justify-content-space-between cs-search-box__entry-point" data-redirect="${redirectUrl}" data-display="${displayName}">
            <div class="d-flex align-items-center icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M5.079 5.069c3.795-3.79 9.965-3.75 13.783.069c3.82 3.82 3.86 9.993.064 13.788s-9.968 3.756-13.788-.064a9.81 9.81 0 0 1-2.798-8.28a.75.75 0 1 1 1.487.203a8.31 8.31 0 0 0 2.371 7.017c3.245 3.244 8.468 3.263 11.668.064c3.199-3.2 3.18-8.423-.064-11.668c-3.243-3.242-8.463-3.263-11.663-.068l.748.003a.75.75 0 1 1-.007 1.5l-2.546-.012a.75.75 0 0 1-.746-.747L3.575 4.33a.75.75 0 1 1 1.5-.008zm6.92 2.18a.75.75 0 0 1 .75.75v3.69l2.281 2.28a.75.75 0 1 1-1.06 1.061l-2.72-2.72V8a.75.75 0 0 1 .75-.75" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="flex-2">${displayName}</div>
            <div class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5l7 7l-7 7" />
                </svg>
            </div>
        </div>`;
}

function turnOnLoader() {
    let spiner = `<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                        <circle cx="12" cy="2" r="0" fill="currentColor">
                            <animate attributeName="r" begin="0" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
                        </circle>
                        <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(45 12 12)">
                            <animate attributeName="r" begin="0.125s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
                        </circle>
                        <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(90 12 12)">
                            <animate attributeName="r" begin="0.25s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
                        </circle>
                        <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(135 12 12)">
                            <animate attributeName="r" begin="0.375s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
                        </circle>
                        <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(180 12 12)">
                            <animate attributeName="r" begin="0.5s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
                        </circle>
                        <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(225 12 12)">
                            <animate attributeName="r" begin="0.625s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
                        </circle>
                        <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(270 12 12)">
                            <animate attributeName="r" begin="0.75s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
                        </circle>
                        <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(315 12 12)">
                            <animate attributeName="r" begin="0.875s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
                        </circle>
                    </svg>`
    $('.cs-search-box__btn-clear').html(spiner);
}

function turnOffLoader() {
    let spiner = ` <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                         <path fill="currentColor" d="M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18C6.47 2 2 6.47 2 12s4.47 10 10 10s10-4.47 10-10S17.53 2 12 2m2.59 6L12 10.59L9.41 8L8 9.41L10.59 12L8 14.59L9.41 16L12 13.41L14.59 16L16 14.59L13.41 12L16 9.41z" />
                     </svg>`
    $('.cs-search-box__btn-clear').html(spiner);
}

function removeDiacritics(str) {
    return str
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '')
        .replace(/đ/g, 'd')
        .replace(/Đ/g, 'D');
}

function escapeRegex(str) {
    return str.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
}

function buildKeywordRegexNoAccent(keyword) {
    const words = removeDiacritics(keyword)
        .toLowerCase()
        .trim()
        .split(/\s+/)
        .filter(Boolean);
    if (words.length === 0) return null;
    const escaped = words.map(escapeRegex);
    return new RegExp(escaped.join('|'), 'gi');
}

function highlightTextNoAccent(text, keyword) {
    const regex = buildKeywordRegexNoAccent(keyword);
    if (!regex) return text;

    const original = text;
    const noAccent = removeDiacritics(text).toLowerCase();
    let result = '';
    let lastIndex = 0;
    let match;

    while ((match = regex.exec(noAccent)) !== null) {
        const start = match.index;
        const end = start + match[0].length;
        result += original.slice(lastIndex, start);
        const originalPart = original.slice(start, end);
        result += `<b>${originalPart}</b>`;
        lastIndex = end;
    }
    result += original.slice(lastIndex);
    return result;
}

function fiterLocation(input, className) {
    const keyword = normalizeVN(input);
    const $items = $(`.${className} .cs-search-box__dropdown-item`);
    const $allItem = $items.has('input[type=radio][value=""]');

    if (!keyword) {
        $items.show();
        return;
    }

    $items.each(function () {
        const displayName = $(this).find("input[type=radio]").data("display-name");
        const matched = normalizeVN(displayName).includes(keyword);
        $(this).toggle(matched);
    });
    $allItem.hide();
}

function normalizeVN(str) {
    return (str || "")
        .toLowerCase()
        .normalize("NFD")
        .trim();
}

function updateSearchBoxStorage(transaction, cityId, districtId, wardId, categoryId) {
    let searchBoxStorage = getSearchBoxStorage();
    if (transaction != '') searchBoxStorage.transaction = transaction;
    if (cityId != '') searchBoxStorage.cityId = cityId;
    if (districtId != '') searchBoxStorage.districtId = districtId;
    if (wardId != '') searchBoxStorage.wardId = wardId;
    if (categoryId != '') searchBoxStorage.categoryId = categoryId;

    localStorage.setItem('actd-search-box', JSON.stringify(searchBoxStorage));
}

function getSearchBoxStorage() {
    let storage = {};
    let storageStr = localStorage.getItem('actd-search-box');
    if (storageStr) {
        storage = JSON.parse(storageStr);
    }
    return storage;
}

window.displayHistory = displayHistory;
window.resetPlaceholderRunning = resetPlaceholderRunning;
window.fetchCategories = fetchCategories;