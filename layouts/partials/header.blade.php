@if($image)
    <header class="site-header outer responsive-header-img" style="background-image: url({{ Theme::asset($image) }})">
@else
    <header class="site-header outer no-image">
@endif
    <div class="inner">
        {{-- @if(Theme::getPath()!=='/') 
        Theme::getPath() rilascia "to do", ma perchè implementare qualcosa che già ha laravel? 
        sostituisco con Request::path(), sembra funzionare
        --}}
        @if(Request::path()!=='/')
            @include('pub_theme::layouts.partials.navbar')
        @endif
        <div class="site-header-content">
            <h1 class="site-title">
                @if(Theme::getPath() === '/')
                    @if(Theme::logo)
                        <img class="site-logo" src="{{ Theme::metatag('logo') }}" alt="{{ Theme::metatag('siteName') }}">
                    @else
                        {{ Theme::metatag('siteName') }}
                    @endif
                @else
                    {{ Theme::metatag('title') }}
                @endif
            </h1>
            <h2 class="site-description">{{ Theme::getPath() === '/' ? Theme::metatag('siteDescription') : Theme::metatag('subtitle') }}</h2>
        </div>
        {{-- @if(Theme::getPath()==='/') --}}
        @if(Request::path()==='/')
            @include('pub_theme::layouts.partials.navbar')
        @endif
    </div>
</header>
