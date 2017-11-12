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
        <div layout="row" layout-xs="column" layout-align="space-between stretch">
            <div flex>
                @include('canvas::frontend.blog.partials.tag')
                @include('canvas::frontend.blog.partials.posts')
                @include('canvas::frontend.blog.partials.paginate-index')
            </div>
            <md-card flex="30" flex-xs="100" layout="column">
                <md-card-title flex="nogrow">
                    <a href="http://jbtotalfitness.co.uk/content">Free Content</a>
                </md-card-title>
                <md-card-content>

                    <div layout="column" layout-xs="row" layout-align="start stretch" layout-align-xs="space-around center" layout-wrap>

                        <a class="xs-flex-none" flex="45" flex-sm="100" layout-align="center center" layout="row"
                           href="https://john-beetison.clickfunnels.com/jb-ten-tips">
                            <img flex src="/vendor/canvas/assets/images/freeContent/ebook1.png" alt="6 Week Glutes program download" style="width:100%; margin:1em auto;">
                        </a>
                        <a class="xs-flex-none" flex="45" flex-sm="100" layout-align="center center" layout="row"
                           href="https://john-beetison.clickfunnels.com/jbtotalfitnessmensprogram">
                            <img flex src="/vendor/canvas/assets/images/freeContent/ebook2.jpg" alt="6 Week Glutes program download" style="width:100%; margin:1em auto;">
                        </a>
                        <a class="xs-flex-none" flex="45" flex-sm="100" layout-align="center center" layout="row"
                             href="https://john-beetison.clickfunnels.com/optingu9p00il">
                            <img flex src="/vendor/canvas/assets/images/freeContent/gluteProgram.jpg" alt="6 Week Glutes program download" style="width:100%; margin:1em auto;">
                        </a>
                        <a class="xs-flex-none" flex="45" flex-sm="100" layout-align="center center" layout="row"
                             href="https://john-beetison.clickfunnels.com/optin72zxw0cp">
                            <img flex src="/vendor/canvas/assets/images/freeContent/backProgram.jpg" alt="Barbell Sherdded Program Logo" style="width:100%; margin:1em auto;">
                        </a>
                        <a class="xs-flex-none" flex="45" flex-sm="100" layout-align="center center" layout="row"
                             href="https://john-beetison.clickfunnels.com/optin2nhits5m">
                            <img flex src="/vendor/canvas/assets/images/freeContent/shoulderProgram.jpg" alt="Barbell Sherdded Program Logo" style="width:100%; margin:1em auto;">
                        </a>

                    </div>

                </md-card-content>
            </md-card>
        </div>
    </div>
@stop

@section('unique-js')
    <script src="{{ elixir('vendor/canvas/assets/js/frontend.js') }}" charset="utf-8"></script>
@endsection