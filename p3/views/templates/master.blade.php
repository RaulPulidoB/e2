<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>

    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>
<body>

<header>
    <img id='logo' src='/images/RockPaperScissorsLogo.PNG' alt='RP - Rock - Paper - Scissors Logo'>
    <div class='center'><h2>{{ $app->config('app.name') }}</h2></div>
</header>

<main>
    @yield('content')
</main>

@yield('body')

</body>
</html>