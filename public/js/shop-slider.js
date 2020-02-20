$(document).ready(function () {

    //
    const shopSlider = $("#shopSlider");


    shopSlider.owlCarousel({
        // items: 3,
        loop: true,
        dots: false,
        margin: 2,
        smartSpeed: 500,
        responsive :{
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 1200 up
           1200: {
                items: 3,
            }
        }
    });

    $('#shopSliderLeft').click(function () {

        shopSlider.trigger('prev.owl.carousel');
        })


        $('#shopSliderRight').click(function () {
            shopSlider.trigger('next.owl.carousel');
        })


    // headerSlider.on('initialize.owl.carousel initialized.owl.carousel', function(event){
    //
    //     $('.slides-controls-number__active').text(event.item.index + 1)
    //     $('.slides-controls-number__total').text(event.item.count)
    // })
    //
    // headerSlider.owlCarousel({
    //     items: 1,
    //     dots: false,
    //     smartSpeed: 2000
    // });
    //
    //
    //
    // $('#headerSliderLeft').click(function () {
    //     headerSlider.trigger('prev.owl.carousel');
    // })
    //
    // $('#headerSliderRight').click(function () {
    //     headerSlider.trigger('next.owl.carousel');
    // })
    //
    //
    // headerSlider.on('changed.owl.carousel', function(event){
    //
    //     $('.slides-controls-number__active').text(event.item.index + 1)
    //     $('.slides-controls-number__total').text(event.item.count)
    // })


});

