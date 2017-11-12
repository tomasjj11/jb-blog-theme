@extends('canvas::frontend.layout')

@section('og-title', $post->title)
@section('twitter-title', $post->title)
@section('og-description', $post->meta_description)
@section('twitter-description', $post->meta_description)
@section('title', \Canvas\Models\Settings::blogTitle().' | '.$post->title)
@if ($post->page_image)
    @section('og-image', url( $post->page_image ))
    @section('twitter-image', url( $post->page_image ))
@endif

@section('content')

    <article>

        <section class="title" style="background-image: url('{{ asset($post->page_image) }}')">
            <div class="header-overlay">
                <div class="container">
                    <div layout="column" layout-align="center center">
                        <h2 class="md-display-4 text-center font-white">{{ $post->title }}</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="article-info">
            <div class="container">
                <p class="post-page-meta">

                    <md-button class="md-raised" href="/">Back</md-button>

                    {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }} &#183; {{ $post->readingTime() }} MIN READ
                    @if ($post->tags->count())
                        <br>
                        {!! join(' ', $post->tagLinks()) !!}
                    @endif
                </p>
            </div>
        </section>

        <div class="container" id="post">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    {!! $post->content_html !!}

                    <p class="dts"><span>&#183;</span><span>&#183;</span><span>&#183;</span></p>

                    @include('canvas::frontend.blog.partials.author')

                </div>
            </div>
        </div>

    </article>

    @include('canvas::frontend.blog.partials.paginate-post')
@stop

@section('unique-js')
    <script src="{{ elixir('vendor/canvas/assets/js/frontend.js') }}" charset="utf-8"></script>
@endsection