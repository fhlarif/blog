<x-app>

    @include('partials.main-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())

        <x-post-grid :posts="$posts"></x-post-grid>

        @else
        <p class="text-center">No post yet. Please check back later.</p>
        @endif

    </main>


    {{-- @foreach ($posts as $post)
    <article>
        <a href="/posts/{{ $post->slug}}">
            <h1>{{ $post->title }}</h1>
        </a>
        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <div>
            <p>{{ $post->excerpt }}</p>
        </div>
    </article>
    @endforeach --}}
</x-app>