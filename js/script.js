$(function(){
    var $window = $(window),
    $headerSNSIcons = $('.header-logo-snsIcons');
    $header = $('header');
    $headerOptions = $('.header-option-parent');

    $window.on('load scroll', function(){
        var value = $(this).scrollTop();
        if(value > 130){
            $headerSNSIcons.addClass('removed-options');
            $header.addClass('shrinked-header');
        }else{
            $headerSNSIcons.removeClass('removed-options');
            $header.removeClass('shrinked-header');
        }
    });

    $headerOptions.hover(function(){
            $(".header-dropdown-menu:not(:animated)", this).slideDown();
        }, function(){
            $(".header-dropdown-menu", this).slideUp();
        });

});
 
