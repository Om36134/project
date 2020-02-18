<section class="shop">

    <div class="container">
        <h2 class="title">
            <span class="subtitle">Shop</span>
            Surfboards
        </h2>
    </div>


    <div class="container shop-slider-wrapper">

        <div class="shop-slider-special-holder">

            <div id="shopSlider" class="owl-carousel shop-slider ">

                @include('block.shop-items.item-01')
                @include('block.shop-items.item-02')
                @include('block.shop-items.item-03')

            </div>

        </div>


    </div>


    <div class="container">

        <div class="shopSlider-controls">

            <div id="shopSliderLeft" class="shopSlider-left">
                <img src="/img/controls/boards-left.svg" alt="Prev">
            </div>

            <div id="shopSliderRight" class="shopSlider-right">
                <img src="/img/controls/boards-right.svg" alt="Next">
            </div>

        </div>

    </div>


    <div class="container">
        <div class="shop-link-wrapper">
            <a class="read-more-link" href="#"> Show All</a>
        </div>
    </div>


</section>