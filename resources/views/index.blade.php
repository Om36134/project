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

<header class="container relative">
    @include('block.navigation')
    @include('block.slider')
</header>

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>
</body>
