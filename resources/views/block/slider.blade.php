<div class="slide-wrapper">

    <!-- Set up your HTML -->
    <div id="headerSlider" class="owl-carousel headerSlider" >

        @include('block.header-slider-items._slide-item')
        @include('block.header-slider-items._slide-item')
        @include('block.header-slider-items._slide-item')
        @include('block.header-slider-items._slide-item')
        @include('block.header-slider-items._slide-item')

    </div>

    <div class="container relative">

        <!-- Slides controls -->

        <div class="slides-controls">

            <a id="headerSliderLeft" class="slides-controls-left" href="#">
                <img src="img/controls/header-slider-left.svg" alt="Left">
            </a>

            <div class="slides-controls-number">
                <span><div class="slides-controls-number__active">-</div></span>
                <span>/</span>
                <span><div class="slides-controls-number__total">-</div></span>
            </div>

            <a id="headerSliderRight" class="slides-controls-right" href="#">
                <img src="img/controls/header-slider-right.svg" alt="Right">
            </a>

        </div>

        <!--Social icons-->

        <div class="header-social-wrapper">

            <div class=" social social--vertical">

                <a href="#" class="social__item">
                    <img src="img/socials/social-tumblr.svg" alt="">
                </a>

                <a href="#" class="social__item">
                    <img src="img/socials/social-twitter.svg" alt="">
                </a>

                <a href="#" class="social__item">
                    <img src="img/socials/social-vimeo.svg" alt="">
                </a>
            </div>

        </div>

    </div>


</div>




