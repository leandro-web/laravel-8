<h1>Cadastrar novo post</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $item)
    <li>{{ $item }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" id="title" placeholder="Título" value ="{{ old('title') }}">
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo" >{{ old('content') }}</textarea>
    <button type="submit">Enviar</button>
</form>