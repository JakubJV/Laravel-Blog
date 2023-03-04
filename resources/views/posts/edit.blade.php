@extends('master')

@section('title', 'Editace příspěvku')

@section('content')

<section class="box post-create">
    <h1 class="box-heading text-muted">Editace příspěvku</h1>

    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Nadpis:</label>
            <input type="text" class="form-control" name="title" value="{{ $post->title }}" required>
        </div>

        <div class="form-group">
            <label for="text">Text:</label>
            <textarea class="form-control" name="text" required>{{ $post->text }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Uložit</button>
    </form>

</section>

@endsection
