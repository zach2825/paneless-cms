<x-guest-layout>
    <header class="blog-title">
        Welcome to My Blog Posts
    </header>

    <article class="blog-post">
        <ul>
            @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}" class="post-title">{{ $post->title }}</a>
            </li>
            @endforeach
        </ul>
</x-guest-layout>
