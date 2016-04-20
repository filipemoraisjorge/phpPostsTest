<div class="post">
    <h3>
        @if ($link)
            <a href="{{ route('post-detail', $post->id) }}">{{ $post->title }}</a>
        @else
            {{ $post->title }}
        @endif
    </h3>
    <div class="content">
        {{ $post->content }}
    </div>
</div>

