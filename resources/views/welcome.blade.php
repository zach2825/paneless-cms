<x-guest-layout>
    <header class="blog-title">
        Welcome to My Blog Posts
    </header>

    <article class="blog-post">
        <ul>
            @foreach($posts as $post)
            <li>
                <x-nav-link :href="route('posts.show', $post)" :active="request()->routeIs('posts.show')" wire:navigate>
                    {{ $post->title }}
                </x-nav-link>
            </li>
            @endforeach
        </ul>
</x-guest-layout>
