<footer class="site-footer outer">
    <div class="site-footer-content inner">
        <section class="copyright"><a href="{{ Theme::metatag('baseUrl') }}">{{ Theme::metatag('siteName') }}</a> &copy;
            <script type="text/javascript">document.write(new Date().getFullYear());</script>
        </section>
        <nav class="site-footer-nav">
            {{--
            @foreach(Theme::metatag('socials') as $social)
                <a href="{{ $social->link }}" target="_blank" rel="noopener">{{ $social->label }}</a>
            @endforeach
            --}}
            <a href="/feed.xml" target="_blank" rel="noopener">RSS</a>
        </nav>
    </div>
</footer>
