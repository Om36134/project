<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document-2</title>

    <link rel="stylesheet" href="/css/navigation.css">
    <link rel="stylesheet" href="/css/slider.css">
    <link rel="stylesheet" href="/css/club-description.css">
    <link rel="stylesheet" href="/css/bass.css">
    <link rel="stylesheet" href="/css/shop.css">
    <link rel="stylesheet" href="/css/leaguespartan.css">
    <link rel="stylesheet" href="/css/fonts/league-spartan.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Poppins:300&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300&display=swap" rel="stylesheet">

</head>

<body>

<div class="container">
</div>
@yield("content")

<header class="container header">

    @include('block.navigation')
    @include('block.slider')

</header>


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

<section class="shop">

    <div class="container">

        <h2 class="title">

            <span class="subtitle">Shop</span>
            Surfboards

        </h2>

        <div class="shop-slider">

            {{--board--}}

            <div class="board">

                <div class="board__img-holder">

                    <img class="board__img" src="/img/boards/board-1.png" alt="Surfing board">
                </div>
                <div class="board-desc">

                    <div class="board-cat">Funboards</div>
                    <div class="board-title">Chilli Rare Bird</div>

                    <div class="board-buy">

                        <div class="board-buy__price">$890</div>
                        <div class="board-buy__link">Buy</div>

                    </div>
                </div>

            </div>

            <div class="board">

                <div class="board__img-holder">

                    <img class="board__img" src="/img/boards/board-2.png" alt="Surfing board">
                </div>
                <div class="board-desc">

                    <div class="board-cat">Surfboards</div>
                    <div class="board-title">Emery NEM XF</div>

                    <div class="board-buy">

                        <div class="board-buy__price">$950</div>
                        <div class="board-buy__link">Buy</div>

                    </div>
                </div>

            </div>

            <div class="board">

                <div class="board__img-holder">

                    <img class="board__img" src="/img/boards/board-3.png" alt="Surfing board">
                </div>
                <div class="board-desc">

                    <div class="board-cat">Funboards</div>
                    <div class="board-title">Agency GROM</div>

                    <div class="board-buy">

                        <div class="board-buy__price">$670</div>
                        <div class="board-buy__link">Buy</div>

                    </div>
                </div>

            </div>

            {{--//board--}}

        </div>

        <div class="shop-link-wrapper">

            <a class="read-more-link" href="#"> Show All</a>

        </div>
    </div>
</section>


<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>
</body>
</html>
