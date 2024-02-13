<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-100">{{ $post->name }}</h1>
        <div class="text-lg text-gray-100 mb-2">
            {{ $post->extract }}
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- Contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2017/02/14/19/16/php-2066704_1280.jpg" alt="">
                    @endif
                </figure>
                <div class="text-base text-gray-100 mt-4">
                    {!! $post->body !!}
                </div>
            </div>

            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-100 mb-4">More on {{ $post->category->name }}</h1>
                <ul>
                    @foreach ($similars as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('posts.show', $similar) }}">
                                @if ($similar->image)
                                    <img class="w-36 h-22 object-cover object-center" src="{{ Storage::url($similar->image->url) }}" alt="">
                                @else
                                    <img class="w-36 h-22 object-cover object-center" src="https://cdn.pixabay.com/photo/2017/02/14/19/16/php-2066704_1280.jpg" alt="">
                                @endif
                                <span class="ml-2 text-gray-100">{!! $similar->name !!}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>
