<a href="{{ route('posts.create') }}">Criar novo post</a>
<hr>
<h1>Posts</h1>

@if (session('message'))
    <p>{{ session('message') }}</p>
@endif

@foreach ($posts as $item)
    <p>
        {{ $item->title }} 
        [ 
            <a href="{{ route('posts.show', $item->id) }}">Ver</a> | 
            <a href="{{ route('posts.edit', $item->id) }}">Editar</a>
        ] 
    </p>
@endforeach

<hr>

{{ $posts->links() }}