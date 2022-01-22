<x-app>
    @foreach ($posts as $post)
        <article>
            <a href="/posts/{{ $post->slug}}">
                <h1>{{ $post->title }}</h1>
            </a>
            <p>
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <div>
                <p>{{ $post->excerpt }}</p>
            </div>
        </article>
    @endforeach
</x-app>
