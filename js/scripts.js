$(function () {
    // New Tree navigation
    $('ul.nav.nav-list > li.has-children > a > .arrow').click(function() {
        $(this).parent().parent().toggleClass('open');
        return false;
    });

    // Responsive navigation
    $('#menu-spinner-button').click(function () {
        $('#sub-nav-collapse').slideToggle();
    });
});

