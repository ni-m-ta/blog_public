var headerHeight = $("header").outerHeight(true);

function FixedAnime(){
    var scroll =$(window).scrollTop();
    if(scroll>=headerHeight){
        $("header").addClass(".shrinked-header");
    }else{
        $("header").removeClass(".shrinked-header");
    }
}