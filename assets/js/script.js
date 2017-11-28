jQuery(document).ready(function($) {

    // Toggle Menu

    var toggleMenu = $('.toggle-menu');
    var mobileMenu = $('.mobile-menu');

    toggleMenu.click(function(){
        mobileMenu.slideToggle('fast');
    })

});