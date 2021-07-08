@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Creazione nuovo post</h1>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">
                    Tutti i posts
                </a>
            </div>
            <div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            <form action="{{ route('admin.posts.store') }}" method="post" >
                @csrf

                <div class="form-group">
                    <label>Immagine di copertina</label>
                    {{-- name="postCover" è il nome del file che gli assegniamo --}}
                    <input type="file" name="postCover"  class="form-control-file">
                </div>

                <div class="form-group">

                    <label>Titolo</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Inserisci il titolo" 
                    value="{{ old('title') }}" required>

                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror 
                </div>

                <div class="form-group">

                    <label>Contenuto</label>
                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10" 
                    placeholder="Inizia a scrivere qualcosa..." required>
                        {{ old('content') }}
                    </textarea>
                    
                    @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                

                {{-- categoria del post --}}
                <div class="form-group">
                    <label>Categoria</label>
                    <select name="category_id"
                            class="form-control  @error('category_id') is-invalid @enderror" >
                        <option value="">-- seleziona categoria --</option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == old('category_id', '') ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- <div class="form-group">
                
                    <label>Tags</label><br>

                    @foreach($post->tags as $tag)

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}">

                        {{ $tag->name }}
                        </label>
                    </div>

                    @endforeach

                </div> --}}

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Crea post
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection