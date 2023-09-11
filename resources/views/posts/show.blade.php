<x-guest-layout>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-10 row-gap-8 lg:grid-cols-5">
            <div class="lg:col-span-2">
                <button onClick="window.history.back()" class="bg-gray-100 px-3 py-2 rounded-lg mb-4">Go back</button>
                <p class="mb-2 text-xs font-semibold tracking-wide text-gray-600 uppercase">
                    {{ $post->created_at->format('d M Y') }}
                </p>
                <div class="mb-3">
                    <p class="font-sans text-xl font-extrabold leading-none tracking-tight lg:text-4xl xl:text-5xl">
                        {{ $post->title }}</p>
                </div>
                <p class="mb-4 text-base text-gray-700 md:text-lg">{{ $post->summary }}</p>
                <p>Category: {{ $post->category->name }}</p>
                <ul class="flex space-x-2 mt-3">
                    @foreach ($post->tags as $tag)
                        <li
                            class="cursor-pointer bg-green-50 text-green-600 px-2 py-1 rounded-lg hover:bg-green-100 hover:text-green-900">
                            {{ $tag->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="prose lg:col-span-3">
                <img src="{{ asset('/storage/' . $post->image) }}" alt="post cover" class="w-full h-auto rounded mb-4">
                {!! $post->detail !!}
            </div>
        </div>
    </div>

    {{-- Similar posts --}}
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-8 lg:grid-cols-4 sm:max-w-sm sm:mx-auto lg:max-w-full">
            @foreach ($similarPosts as $post)
                <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
                    <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500"
                        class="object-cover w-full h-64" alt="" />
                    <div class="p-5 border border-t-0">
                        <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                            <a href="/"
                                class="transition-colors duration-200 text-blue-gray-900 hover:text-deep-purple-accent-700"
                                aria-label="Category" title="traveling">traveling</a>
                            <span class="text-gray-600">— {{ $post->created_at->format('d M Y') }}</span>
                        </p>
                        <a href="/" aria-label="Category" title="Visit the East"
                            class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">Visit
                            the East</a>
                        <p class="mb-2 text-gray-700">
                            Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem
                            doloremque.
                        </p>
                        <a href="/" aria-label=""
                            class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn
                            more</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
