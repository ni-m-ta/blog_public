$(function(){
    var $window = $(window),
    $headerOptions = $('.header-logo-snsIcons');
    $header = $('header');

    $window.on('load scroll', function(){
        var value = $(this).scrollTop();
        if(value > 130){
            $headerOptions.addClass('removed-options');
            $header.addClass('shrinked-header');
        }else{
            $headerOptions.removeClass('removed-options');
            $header.removeClass('shrinked-header');
        }
    });
});
 
