@extends('pub_theme::layouts.app')

@php
//dddx(get_defined_vars());
$page = $row;
@endphp
@section('content')


    <header class="site-header outer">
        <div class="inner">
            @include('pub_theme::layouts.partials.navbar')
        </div>
    </header>

    <main id="site-main" class="site-main outer">
        <div class="inner">
            <article class="post-full post">
                <header class="post-full-header">
                    <section class="post-full-meta">
                        <time class="post-full-meta-date" datetime="{{ date('F jS, Y', $page->date) }}">{{ date('F jS, Y', $page->date) }}</time>
                        @if ($page->tags)
                            @foreach ($page->tags as $i => $tag)
                                <span class="date-divider">/</span> <a href="{{ '/tag/' . $tag }}" title="View posts in {{ $tag }}">{{ $tag }}</a>
                            @endforeach
                        @endif
                    </section>
                    <h1 class="post-full-title">{{$page->title}}</h1>
                </header>
                @if($page->image)
                    <figure class="post-full-image">
                        <img src="{{ $page->image }}" alt="{{ $page->title }}">
                    </figure>
                @endif
                <section class="post-full-content">
                    <div class="post-content">
                        {!! $page->txt !!}
                    </div>
                </section>
                <!-- Email subscribe form at the bottom of the page -->
                @if($page->subscribe)
                    <section class="subscribe-form">
                        <h3 class="subscribe-form-title">Subscribe to {{ $page->siteName }}</h3>
                        <p>Get the latest posts delivered right to your inbox</p>
                        <form action="https://tinyletter.com/rickwest" method="post" target="popupwindow"
                              onsubmit="window.open('{{ $page->subscribe }}', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
                            <div class="form-group">
                                <input class="subscribe-email" type="email" name="email" id="tlemail" placeholder="youremail@example.com" />
                            </div>
                            <input type="hidden" value="1" name="embed"/>
                            <button id="" class="" type="submit"><span>Subscribe</span></button>
                        </form>
                    </section>
                @endif
            </article>
        </div>








    </main>
@endsection