$(document).ready(function () {


    const headerSlider = $("#headerSlider");

    headerSlider.on('initialize.owl.carousel initialized.owl.carousel', function(event){

        $('.slides-controls-number__active').text(event.item.index + 1)
        $('.slides-controls-number__total').text(event.item.count)
    })

    headerSlider.owlCarousel({
        items: 1,
        dots: false,
        smartSpeed: 2000
    });



    $('#headerSliderLeft').click(function () {
        headerSlider.trigger('prev.owl.carousel');
    })

    $('#headerSliderRight').click(function () {
        headerSlider.trigger('next.owl.carousel');
    })


    headerSlider.on('changed.owl.carousel', function(event){

        $('.slides-controls-number__active').text(event.item.index + 1)
        $('.slides-controls-number__total').text(event.item.count)
    })


});

