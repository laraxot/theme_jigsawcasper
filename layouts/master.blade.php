<!DOCTYPE html>
<html lang="en">
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
    @show

    <!-- Casper styles -->
    <link rel="stylesheet" href="{{ Theme::asset('pub_theme::assets/build/screen.css') }}">

    <!-- Front Awesome icons -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>

</head>
<body class="@yield('body-class', 'home-template')">
    <div class="site-wrapper">
        @yield('body')
        @include('pub_theme::layouts.partials.footer')
    </div>

    <!-- The big email subscribe modal content -->
    @if(Theme::metatag('subscribe'))
        <div id="subscribe" class="subscribe-overlay">
            <a class="subscribe-overlay-close" href="#"></a>
            <div class="subscribe-overlay-content">
                @if(Theme::metatag('logo'))
                    <img class="subscribe-overlay-logo" src="{{ Theme::metatag('logo') }}" alt="{{ Theme::metatag('siteName') }}"/>
                @endif
                <h1 class="subscribe-overlay-title">Subscribe to {{ Theme::metatag('siteName') }}</h1>
                <p class="subscribe-overlay-description">Stay up to date! Get all the latest &amp; greatest posts delivered straight to your inbox</p>
                <form action="https://tinyletter.com/rickwest" method="post" target="popupwindow"
                      onsubmit="window.open('{{ Theme::metatag('subscribe') }}', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">

                    <div class="form-group">
                        <input class="subscribe-email" type="email" name="email" id="tlemail"
                               placeholder="youremail@example.com"/>
                    </div>
                    <input type="hidden" value="1" name="embed"/>
                    <button id="" class="" type="submit"><span>Subscribe</span></button>
                </form>
            </div>
        </div>
    @endif

    <!-- Casper scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ Theme::asset('pub_theme::assets/build/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ Theme::asset('pub_theme::assets/build/infinitescroll.js') }}"></script>

    @yield('scripts')
</body>
</html>
