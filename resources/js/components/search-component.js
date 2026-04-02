$(document).ready(function () {
    $('.cs-search__tab-item').click(function () {
        const newType = $(this).data('type');

        // Tránh click lặp lại tab hiện tại
        if ($('#cs-search__tab-actived').attr('data-type') === newType) return;

        // Cập nhật active tab
        $('.cs-search__tab-item').removeClass('active');
        $(this).addClass('active');

        // Cập nhật giá trị hidden
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

        // Reload category tương ứng với tab
        fetchCategories(transaction);

        // Reset các trạng thái tìm kiếm
        $('.cs-search__imput').val(null);
        $('.cs-search-box__btn-clear').hide();
        resetPlaceholderRunning();
        displayHistory();
    });
});
