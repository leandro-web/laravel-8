<a href="{{ route('posts.create') }}">Criar novo post</a>
<hr>
<h1>Posts</h1>

@foreach ($posts as $item)
    <p>{{ $item->title }}</p>
@endforeach