$(document).ready(function(){
    $(window).scroll(function(){
        var height = $(window).scrollTop();
        var navbar = $('.navbar-default');
        if(height > 500)
        {
          if( ! navbar.hasClass('navbar-scrolled')) {
            navbar.removeClass('navbar-transparent');
            navbar.addClass('navbar-scrolled');
          }
        }
        else {
          if(navbar.hasClass('navbar-scrolled')) {
            navbar.removeClass('navbar-scrolled');
          }
          navbar.addClass('navbar-transparent');
        }
    });
});