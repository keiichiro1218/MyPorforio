jQuery(function ($) {

jQuery(".c-button-nav").click(function () {
    jQuery(this).toggleClass('active');
    jQuery(".p-nav, .l-content").toggleClass('active');
});

})