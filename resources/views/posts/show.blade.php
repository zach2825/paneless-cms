<x-guest-layout>
    @if(false)
        <header class="blog-title">
            My Blog
        </header>
    @endif

    <article class="blog-post">
        <h2 class="post-title">{{ $post->title }}</h2>
        <p class="post-date">{{ $post->created_at->diffForHumans() }}</p>
        <div class="post-content">
            {!! $post->body !!}
        </div>
    </article>

</x-guest-layout>
