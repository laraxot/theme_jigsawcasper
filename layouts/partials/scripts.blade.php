<!-- JavaScript files-->
@stack('scripts_before')
<script>
    var basePath = '';
    var base_url='{{ url('') }}';
    var lang='{{ \App::getLocale() }}';
    {{--  var google_maps_api='{{ config('xra.google.maps.api') }}'; --}}
@if(\Request::has('address'))
    var address ="{{ \Request::input('address') }}";
@endif
@if(\Request::has('lat') && \Request::has('lng'))
    var lat ="{{ \Request::input('lat') }}";
    var lng ="{{ \Request::input('lng') }}";
@endif
window.Auth = @json([
    'signedIn' => Auth::check(),
    'id'=>Auth::id(),
]);
window.Urls = @json([
    'api' => url('/api'),
    'login' => route('login')
]);
</script>
@php
    Theme::add('pub_theme::dist/js/manifest.js',1);
    Theme::add('pub_theme::dist/js/vendor.js',2);
    Theme::add('pub_theme::dist/js/app.js',3);

    //Theme::add('pub_theme::resources/js/svg.js');
     //    Theme::add('pub_theme::assets/build/jquery.fitvids.js');
    Theme::add('pub_theme::resources/js/infinitescroll.js');
    Theme::add('pub_theme::resources/js/theme.js');


    //Theme::add('theme::js/modal_ajax.js');
    //Theme::add('theme::js/modal_iframe.js');
@endphp
  {!! Theme::showScripts(false) !!}
  @stack('scripts')


  <!-- Casper scripts -->
  {{--
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ Theme::asset('pub_theme::assets/build/jquery.fitvids.js') }}"></script>
  <script type="text/javascript" src="{{ Theme::asset('pub_theme::assets/build/infinitescroll.js') }}"></script>
  @yield('scripts')
  --}}
