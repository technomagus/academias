function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

function arrumaBotoes()
{
    heightTotal = $(".jcarousel-container-horizontal").height() /2;
    $(".jcarousel-prev").css({'top': heightTotal});
    $(".jcarousel-next").css({'top': heightTotal});
}
$(window).resize(function(){
    arrumaBotoes();
});
$(document).ready(function() {
    $('#mycarousel').jcarousel({
        auto: 4,
//        wrap: 'circular',
        wrap: 'both',
	visible:4,
	scroll:4,
	animation: 1000,
	itemFallbackDimension: 45
    });
    arrumaBotoes();
    
});