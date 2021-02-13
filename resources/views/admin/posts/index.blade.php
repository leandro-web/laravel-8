<a href="{{ route('posts.create') }}">Criar novo post</a>
<hr>
<h1>Posts</h1>

@if (session('message'))
    <p>{{ session('message') }}</p>
@endif

<form action="{{ route('posts.search')}}" method="POST">
    @csrf
    <input type="text" name="search" placeholder="Filtrar:">
    <button type="submit">Filtrar</button>
</form>

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
@if (isset($filters))
    {{ $posts->appends($filters)->links() }}
@else
    {{ $posts->links() }}
@endif