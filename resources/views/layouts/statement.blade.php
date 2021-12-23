<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--META--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--STYLESHEETS--}}
    <link rel="stylesheet" href="/css/main.css">
    {{--TITLE--}}
    <title>{{config('app.name')}}</title>
    <link rel="icon" href="/img/checkbox-blank-circle-outline.png" type="image/png">
    {{--SCRIPTS--}}
    <script src='https://www.recaptcha.net/recaptcha/api.js?render=6LdiIwAbAAAAAFOIh4zpN8JGpIxrzHau_GH10LWG'></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LdiIwAbAAAAAFOIh4zpN8JGpIxrzHau_GH10LWG', { action: 'sendmail' })
                .then(function (token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                });
        });
    </script>
</head>
<body class="body">
<section id="header-section" class="header">
    @yield("header")
</section>
<section id="content" class="content">
    <link rel="stylesheet" href="/css/statement.css">
    <div class="statement-container">
        <div class="statement-container-top">
            <h1 class="statement-title">
                @yield('statement-title')
            </h1>
            <h2 class="statement-subtitle">
                @yield('statement-subtitle')
            </h2>
        </div>
        <div class="statement-container-bottom">
            @yield('statement-content')
        </div>
    </div>
</section>
<section id="footer-section" class="footer">
    @yield("footer")
</section>
<input id="cookieButton" name="cookieButton" type="checkbox">
<div id="cookieBar">
    <p>Deze site maakt uitsluitend gebruik van functionele cookies. De <a href="/terms-of-use">Gebruiksvoorwaarden</a> en het <a href="/privacy-policy">Privacybeleid</a> zijn van toepassing. <label id=cookieLabel for="cookieButton">Ik snap het!</label></p>
</div>
</body>
{{--SCRIPTS--}}
<script src="/scripts/js/theme.js"></script>
@if (session()->has('recaptcha-error-popup'))
    <script type="text/javascript">alert("Er was een probleem met reCAPTCHA!")</script>
    @endif
</html>
