$(function () {
    $('.btn-fullscreen').on('click', function (e) {
        $('#' + $(this).data('target')).toggleClass('container-fullscreen');
        $(this).find('i').toggleClass('fa-expand');
        $(this).find('i').toggleClass('fa-close');
    });
});