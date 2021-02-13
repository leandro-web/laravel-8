@extends('admin.layouts.app')

@section('title', 'Editando o post')

@section('content')
    <h1>Editar o post <strong>{{ $post->title }}</strong></h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @include('admin.posts.partials.form')
    </form>
@endsection