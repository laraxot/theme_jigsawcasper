@extends('pub_theme::layouts.master')
{{--
    ---
    image: /assets/images/blog-cover.jpg
    pagination:
    collection: posts
    ---
--}}
@php
	$articles=Theme::xotModelEager('article')
				->where('parent_id',0)
				->orderBy('pos')
				->get();
	//ddd($articles);
@endphp
@section('body')

    @include('pub_theme::layouts.partials.header',['image'=>'pub_theme::assets/images/blog-cover.jpg'])

    <main id="site-main" class="site-main outer">
        <div class="inner">
            <div class="post-feed">

                @foreach ($articles as $post)
                    @include('pub_theme::layouts.partials.post-card', ['postCardLarge' => $loop->first || (($loop->index % 6) === 0)])
                @endforeach

            </div>
        </div>
    </main>
@endsection
