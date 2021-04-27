    <div class="container py-8 ">

        <h1 class="text-4xl font-bold text-gray-600 ">
            {{ $post->name }}
        </h1>

        <div class="mb-2 text-lg text-gray-500">
            {{ $post->extract }}
        </div>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">

            {{-- contenido principal --}}
            <div class="lg:col-span-2">

                <figure class="">
                    <img src="{{ Storage::url($post->image->url) }}" alt="" class="object-cover object-center w-full h-80">
                </figure>

                <div class="mt-4 text-base text-gray-500 ">
                    {{ $post->body }}
                </div>

            </div>

            {{-- contenido relacionado --}}
            <aside class="">

                <h1 class="mb-4 text-2xl font-bold text-gray-600">
                    Más en  {{ $post->category->name }}
                </h1>

                <ul class="">
                    @foreach($similares as $similar)
                        <li class="mb-4 ">
                            <a href="{{ route('posts.show', $similar) }}" class="flex">
                                <img src="{{ Storage::url($similar->image->url) }}" alt="" class="object-cover object-center h-20 w-36 ">
                                <span class="ml-2 text-gray-600 ">{{ $similar->name }}</span>

                            </a>
                        </li>
                    @endforeach
                </ul>

            </aside>

        </div>

    </div>
