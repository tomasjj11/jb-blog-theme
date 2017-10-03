@extends('canvas::frontend.layout')

@if (isset($tag->title))
    @section('title', \Canvas\Models\Settings::blogTitle().' | '.$tag->title)
@else
    @section('title', \Canvas\Models\Settings::blogTitle().' | Blog')
@endif
@section('og-title', \Canvas\Models\Settings::blogTitle())
@section('twitter-title', \Canvas\Models\Settings::blogTitle())
@section('og-description', \Canvas\Models\Settings::blogDescription())
@section('twitter-description', \Canvas\Models\Settings::blogDescription())

@section('content')
    <div class="container">
        <h2>Blog</h2>
        <div layout="row" layout-align="space-between stretch">
            <div flex>
                @include('canvas::frontend.blog.partials.tag')
                @include('canvas::frontend.blog.partials.posts')
                @include('canvas::frontend.blog.partials.paginate-index')
            </div>
            <md-card flex="30">
                <md-card-title>
                    <a href="http://jbtotalfitness.co.uk/content">Free Content</a>
                </md-card-title>
                <md-card-content>
                </md-card-content>
            </md-card>
        </div>
    </div>
@stop

@section('unique-js')
    <script src="{{ elixir('vendor/canvas/assets/js/frontend.js') }}" charset="utf-8"></script>
@endsection