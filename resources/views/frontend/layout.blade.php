<!DOCTYPE html>
<html lang="en">
    <head>
        @include('canvas::frontend.shared.partials.meta')
        @include('canvas::frontend.shared.partials.css')
        @include('canvas::frontend.shared.partials.user-generated-css')
        <style>

            .post-previews {
                position: relative;
            }

            .post-access{
                position: absolute;
                bottom: 0;
                left: 0;
                display: block;
                width: 100%;
                padding: .5em 0;
            }

            .post-preview {
                position: relative;
            }

            .post-preview .post-preview-image {
                position: relative;
                display: block;
                height: 8em;
                background-size: cover;
                background-position: center;
            }

            .post-preview md-card-title {
                font-size: 1.2em;
                height: 5em;
            }

            .post-preview .post-meta {
                font-size: .7em;
            }

            .post-access a {
                display: block;
                text-align: center;
                width: 100%;
            }

        </style>
    </head>
    <body ng-app="jbtotalfitness-blog" ng-cloak>
            @include('canvas::frontend.shared.partials.header')
            @yield('content')
            @include('canvas::frontend.shared.partials.footer')
            @yield('unique-js')
            @include('canvas::frontend.shared.partials.user-generated-js')
            @include('canvas::frontend.shared.partials.library-js')
    </body>
</html>
