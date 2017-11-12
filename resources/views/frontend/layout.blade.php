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

            article section.title {
                margin-top:-165px;
                background-position: center 0;
                background-size: cover;
            }

            article section.title .header-overlay {
                width: 100%;
                height: 100%;
                background-color: rgba(190, 190, 190, .7);
            }

            article section.title .container {
                height: 100%;
                padding-top: 170px;
            }

            article section.article-info {
                background: #999;
                color: #FFF;
            }
            article section.article-info .post-page-meta {
                padding:.5em 0;
                margin:0px;
            }

            #post {
                padding: 1em 1em;
            }

            md-card.author md-card-header md-card-avatar {
                width: 100px;
                height: 100px;
                margin-right: 0px
            }

            md-card.author h4.auth-name {
                font-size: 14pt;
                font-weight: 400;
                color: #888;
                font-style: italic;
                margin:0px;
            }

            md-card.author h4.auth-name span.heavy {
                font-weight: 700;
                color: #000;
                font-style: normal;
            }

            ul.pager {
                list-style: none;
                text-align: center;
                padding-left: 0px;
            }
            ul.pager li {
                display: inline-block;
                padding:.3em;
            }

            @media (max-width:480px) {
                .title h2 {
                    font-size: 70px;
                    line-height: 60px;
                }
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
