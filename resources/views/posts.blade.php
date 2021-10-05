<x-app>
    @foreach ($posts as $post)
        <article>
            <a href="/posts/{{ $post->id }}">
                <h1>{{ $post->title }}</h1>
            </a>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-app>
