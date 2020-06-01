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
{{--
 'user' => Auth::user()
  <!-- jQuery-->
  <script src="{{ Theme::asset('pub_theme::vendor/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
  <script src="{{ Theme::asset('pub_theme::vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Magnific Popup - Lightbox for the gallery-->
  <script src="{{ Theme::asset('pub_theme::vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
  <!-- Smooth scroll-->
  <script src="{{ Theme::asset('pub_theme::vendor/smooth-scroll/smooth-scroll.polyfills.min.js') }}"></script>
  <!-- Bootstrap Select-->
  <script src="{{ Theme::asset('pub_theme::vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
  <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
  <script src="{{ Theme::asset('pub_theme::vendor/object-fit-images/ofi.min.js') }}"></script>
  <!-- Swiper Carousel                       -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
  <script src="{{ Theme::asset('pub_theme::dist/js/app.js') }}"></script>

  <!-- Main Theme JS file    -->
  <script src="{{ Theme::asset('pub_theme::resources/js/svg.js') }}"></script>
  <script src="{{ Theme::asset('pub_theme::js/theme.js') }}"></script>
  --}}
@php
    Theme::add('pub_theme::dist/js/manifest.js',1);
    Theme::add('pub_theme::dist/js/vendor.js',2);
    Theme::add('pub_theme::dist/js/app.js',3);

    Theme::add('pub_theme::resources/js/svg.js');
    Theme::add('pub_theme::resources/js/theme.js');
    Theme::add('theme::js/modal_ajax.js');
    Theme::add('theme::js/modal_iframe.js');
@endphp
  {!! Theme::showScripts(false) !!}
  @stack('scripts')
