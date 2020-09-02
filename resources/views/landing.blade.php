<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="description" content="{{ config('app.description') }}">
    <meta name="keywords" content="{{ config('app.keyword') }}">
    <meta name="author" content="{{ config('app.author') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ mix('css/practice_therapy.css') }}" rel="stylesheet">
    <link href="{{ mix('css/theme.css') }}" rel="stylesheet">
</head>

<body>
    <noscript>
        <strong>
            {{ __("We're sorry but Practice Therapy doesn't work properly without JavaScript enabled. Please enable it and refresh the page.") }}
        </strong>
    </noscript>

    <div id="PracticeTherapy">
        <practicetherapy></practicetherapy>
    </div>

    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/practice_therapy.js') }}" defer></script>
</body>

</html>
