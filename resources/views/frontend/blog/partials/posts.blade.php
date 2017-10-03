<div layout="row" layout-xs="column" layout-wrap layout-align="space-between stretch" class="xs-flex-none post-previews">
    @foreach ($posts as $key => $post)

        <md-card class="xs-flex-none post-preview" layout="column" flex="45" flex-sm="50" flex-xs="100">
            <div class="md-card-image post-preview-image" style="background-image: url('{{ asset($post->page_image) }}');"></div>

            <md-card-title flex="nogrow">
                <a href="{{ $post->url($tag) }}">{{ $post->title }}</a>
            </md-card-title>

            <md-card-content flex>

                <p class="post-meta">
                    {{ $post->published_at->diffForHumans() }} &#183; {{ $post->readingTime() }} minute read
                    <br>
                    @unless( $post->tags->isEmpty())
                        {!! implode(' ', $post->tagLinks()) !!}
                    @endunless
                </p>
                <p class="postSubtitle">
                    {{ str_limit($post->subtitle, config('blog.frontend_trim_width')) }}
                </p>

            </md-card-content>

            <md-card-actions layout="row" layout-align="end center">
                <a href="{{ $post->url($tag) }}" style="font-size:.7em;">READ MORE...</a>
            </md-card-actions>
        </md-card>

    @endforeach
</div>