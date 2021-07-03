  
@extends('layouts.app')
@section('content')
{{-- @dump($post) --}}
<div class="container">
    <div class="text-center border border-primary rounded-left">
        <h2>TITLE: {{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <p>{{ $post->slug }}</p>
        <p>{{ $post->id }}</p>
        {{-- <p>{{ $post->category ? $post->category->name : '-' }}</p> --}}
        <p>{{ $post->user->name }}</p>
    </div>
    <a href="{{ route('admin.posts.edit', $post->id) }}" class="badge badge-primary">modifica il tuo post</a><br>
    <a href="{{ route('admin.posts.index') }}" class="badge badge-primary">ritorna alla home</a><br>
</div>
@endsection