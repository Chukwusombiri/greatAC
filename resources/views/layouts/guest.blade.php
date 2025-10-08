<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $metaDescription }}">
    <meta property="og:title" content="{{ $ogTitle }}" />
    <meta property="og:site_name" content="{{ $appName }}" />
    <meta property="og:image" content="{{ asset('/images/meta_thumbnail.png') }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:description" content="{{ $ogDescription }}" />
    <meta property="og:type" content="website">
    <title>{{ config('app.name') }}: Top Portfolio Management provider</title>
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon-16x16.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&family=Expletus+Sans:wght@700&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    @livewireStyles
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '7b9661f78e19da9ad3ce3f584e651526b7ea4c7c';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

</head>

<body>
    <div class="futura-medium text-gray-900 antialiased">
        {{ $slot }}
    </div>
    <div class="bg-primary-dark">
        <x-footer />
    </div>
    @livewireScripts
</body>

</html>
