<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,  initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surfboards</title>

    <link rel="stylesheet" href="/css/navigation.css">
    <link rel="stylesheet" href="/css/slider.css">
    <link rel="stylesheet" href="/css/club-description.css">
    <link rel="stylesheet" href="/css/bass.css">
    <link rel="stylesheet" href="/css/shop.css">
    <link rel="stylesheet" href="/css/article-01.css">
    <link rel="stylesheet" href="/css/subscribe.css">
    <link rel="stylesheet" href="/css/camp.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/social.css">

    {{--Font Style--}}

    <link rel="stylesheet" href="/css/fonts/league-spartan.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Poppins:300&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300&display=swap" rel="stylesheet">

    {{--Owl Carusel--}}
    <link rel="stylesheet" href="./libs/owlcarusel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./libs/owlcarusel2/assets/owl.theme.default.min.css">


</head>

<body>

<div class="container">
</div>
@yield("content")



@include('block.navigation')
@include('block.slider')

<section class="quote">
    <div class="quote-wrapper">
        <div class="quote__text">
            Surfing is the most blissful
            experience you can have on this planet, a
            taste of heaven.
        </div>
        <div class="quote__author">John McCarthy</div>
    </div>
</section>

<section class="club-description ">

    <div class="container">

        <div class="club-description-wrapper">

            <div class="club-description__img">

                <img src="img/img/img-2.jpg" alt="Picture">

            </div>

            <div class="club-description-video">

                <img src="img/img/img-3.jpg" alt="Video">

                <div class="club-description-video__control">

                    <img src="img/controls/control-play.svg" alt="Video">

                </div>

            </div>

            <div class="club-description__text">

                <p>By better understanding
                    the various aspects of surfing, you wil improve faster
                    and have more fun in the water.</p>
            </div>

            <div class="club-description__link">
                <a class="read-more-link" href="#"> Read More</a>
            </div>

        </div>

    </div>

</section>

@include('block.shop')
@include('block.article-01')
@include('block.article-02')
@include('block.subscribe')
@include('block.camp')
@include('block.footer')



{{--<!-- Latest compiled and minified JavaScript -->--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"--}}
{{--integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"--}}
{{--crossorigin="anonymous"></script>--}}

{{--Owl Carusel--}}

<script src="./libs/jquery/jquery-3.4.1.min.js"></script>
<script src="./libs/owlcarusel2/owl.carousel.min.js"></script>
<script src="./js/header-slider.js"></script>
<script src="./js/shop-slider.js"></script>


</body>
</html>
