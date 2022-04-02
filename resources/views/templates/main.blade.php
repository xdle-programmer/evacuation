<?php
$files = scandir('public/markup');

foreach ($files as $file) {
    if (strstr($file, 'js') && !strstr($file, 'map')) {
        $js = $file;
    }

    if (strstr($file, 'css') && !strstr($file, 'map')) {
        $css = $file;
    }
}

?>

    <!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Евакуація до Болгарії</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-224676614-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-224676614-1');
    </script>


    <link rel="stylesheet" type="text/css" href="/markup/<?=$css?>">
</head>
<body>

<div class="header">
    <div class="header__block layout">
        <a href="/" class="header__name">Евакуація до Болгарії</a>


        <div class="header__contacts-block">
            <div class="header__social">
                @include('components.social')
            </div>
            <div class="header__contacts">
                <a href="tel:+380972141648" class="header__contact">+38-097-214-16-48</a>
                <a target="_blank" href="https://forms.gle/H8rSUwsF7injQaQH6"
                   class="header__register">Зареєструватись</a>
            </div>
        </div>
    </div>
</div>

@yield('content')


<div class="footer">
    <div class="footer__block layout">
        <a href="/" class="footer__name">Евакуація до Болгарії</a>
        <div class="footer__contacts-block">
            <div class="footer__social">
                @include('components.social')
            </div>
            <div class="footer__contacts">
                <a href="tel:+380972141648" class="footer__contact">+38-097-214-16-48</a>
                <a target="_blank" href="https://forms.gle/H8rSUwsF7injQaQH6"
                   class="footer__register">Зареєструватись</a>
            </div>
        </div>
    </div>
</div>

<script src="/markup/<?=$js?>"></script>

</body>
</html>
