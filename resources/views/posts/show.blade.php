<x-guest-layout>

    {{-- tailwind blog posts page --}}
    <div class="w-full lg:w-8/12 mx-auto">
        <div class="bg-white p-4 shadow-md rounded-md">
            <h1 class="text-2xl font-bold text-gray-800">{{ $post->title }}</h1>
            <p class="text-gray-600 mt-2">{{ $post->created_at->diffForHumans() }}</p>
            @if(false)
                <div class="mt-4">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                         class="w-full h-64 object-cover rounded-md">
                </div>
            @endif
            <div class="mt-4">
                <p class="text-gray-700">{!! $post->body !!}</p>
            </div>
        </div>
    </div>

</x-guest-layout>
