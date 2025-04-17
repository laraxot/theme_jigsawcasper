<head>
    @if(Theme::metatag('production') && Theme::metatag('gaTrackingId'))
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ Theme::metatag('gaTrackingId') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ Theme::metatag('gaTrackingId') }}');
        </script>
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ Theme::metatag('siteName') }}{{ Theme::metatag('title') ? ' | ' . Theme::metatag('title') : '' }}</title>

    <link rel="icon" type="image/png" href="{{ Theme::metatag('icon') }}"/>

    @section('meta')
        <!-- Search Engine -->
        <meta name="description" content="{{ Theme::metatag('description') ?? Theme::metatag('siteDescription') }}">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="{{ Theme::metatag('siteName') }}{{ Theme::metatag('title') ? ' | ' . Theme::metatag('title') : '' }}">
        <meta itemprop="description" content="{{ Theme::metatag('description') ?? Theme::metatag('siteDescription') }}">
        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{{ Theme::metatag('siteName') }}{{ Theme::metatag('title') ? ' | ' . Theme::metatag('title') : '' }}">
        <meta name="twitter:description" content="{{ Theme::metatag('description') ?? Theme::metatag('siteDescription') }}">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="{{ Theme::metatag('title') ?  Theme::metatag('title') . ' | ' : '' }}{{ Theme::metatag('siteName') }}">
        <meta name="og:description" content="{{ Theme::metatag('description') ?? Theme::metatag('siteDescription') }}">
        <meta name="og:type" content="website">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @show

    <!-- Casper styles -->
    {{--
        <link rel="stylesheet" href="{{ Theme::asset('pub_theme::assets/build/screen.css') }}">
    --}}
    <link rel="stylesheet" href="{{ Theme::asset('pub_theme::dist/css/app.css') }}">

    <!-- Front Awesome icons -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>

</head>
