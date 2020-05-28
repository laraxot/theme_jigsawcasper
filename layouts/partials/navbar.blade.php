<nav class="site-nav">
    <div class="site-nav-left">
        @if(Theme::getPath() !== '/')
            @if(Theme::metatag('logo'))
                <a class="site-nav-logo" href="/"><img src="{{ Theme::metatag('logo') }}" alt="{{ Theme::metatag('siteName') }}"/></a>
            @else
                <a class="site-nav-logo" href="/">{{ Theme::metatag('siteName') }}</a>
            @endif
        @endif
        <ul class="nav" role="menu">
            <li class="" role="menuitem"><a href="/">Blog</a></li>
            <li class="" role="menuitem"><a href="/about">About</a></li>
            <li class="" role="menuitem"><a href="/tag/getting-started">Getting Started</a></li>
            <li class="" role="menuitem"><a href="https://jigsaw.tighten.co/">Try Jigsaw</a></li>
        </ul>
    </div>
    <div class="site-nav-right">
        {{--
        @foreach(Theme::metatag('socials') as $social)
            <a class="social-link social-link-fb" href="{{ $social->link }}" title="{{ $social->label }}"
               target="_blank" rel="noopener"><i class="{{ $social->icon }} fa-lg"></i></a>
        @endforeach
        @if(Theme::metatag('subscribe'))
            <a class="subscribe-button" href="#subscribe">Subscribe</a>
        @endif
        --}}
    </div>
</nav>
