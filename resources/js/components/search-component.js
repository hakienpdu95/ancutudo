$(document).ready(function () {
    $('.cs-search__tab-item').click(function () {
        if ($('#cs-search__tab-actived').attr('data-type') == $(this).data('type')) return;

        $('.cs-search__tab-item').removeClass('active');
        $(this).addClass('active');
        if ($(this).data('type') == 'project') {
            $('#cs-search__tab-actived').val(3);
            $('.cs-search-box__selection--category').hide();
        }
        else if ($(this).data('type') == 'rent') {
            $('#cs-search__tab-actived').val(2);
            fetchCategories(2);
            $('.cs-search-box__selection--category').show();
        }
        else {
            $('#cs-search__tab-actived').val(1);
            fetchCategories(1);
            $('.cs-search-box__selection--category').show();
        }
        $('#cs-search__tab-actived').attr('data-type', $(this).data('type'));
        $('.cs-search__imput').val(null);
        $('.cs-search-box__btn-clear').hide();
        resetPlaceholderRunning();
        displayHistory();
    })
})
