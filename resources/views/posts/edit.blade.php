@extends('master')

@section('title', 'Editace příspěvku')

@section('content')

<div class="container mx-auto text-primary">
    <section class="box post-create">
        <h1 class="box-heading text-center">Editace příspěvku</h1>

        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group mt-sm-3">
                <label for="title">Nadpis:</label>
                <input type="text" class="form-control mt-sm-1" name="title" value="{{ $post->title }}" required>
            </div>

            <div class="form-group mt-sm-3">
                <label for="text">Obsah:</label>
                <textarea class="form-control mt-sm-1" name="text" required>{{ $post->text }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-sm-3">Uložit</button>
        </form>

    </section>
</div>

@endsection
