jQuery(function ($) {

jQuery(".c-button-nav").click(function () {
    jQuery(this).toggleClass('active');
    jQuery(".p-nav, .l-content").toggleClass('active');
});

jQuery(".p-post").hover(
    function () {
        jQuery(this).addClass('p-post_hover');
        jQuery(this).find('.p-post__content').addClass('p-post_hover-img');
    },

    function () {
        jQuery(this).removeClass('p-post_hover');
        jQuery(this).find('.p-post_hover-img').removeClass('p-post_hover-img');
    },
);


})