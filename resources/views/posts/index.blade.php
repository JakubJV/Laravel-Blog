@extends('master')
@section('title', 'Všechny příspěvky')

@section('content')
    <div class="container">
        <section class="box post-list bg-primary text-white p-3 rounded">
            <h1 class="box-heading">
                Seznam Příspěvků 
            </h1>

            @forelse($posts as $post)

                <article id="post-{{ $post->id }}" class="post mb-3">
                    <header class="post-header"></header>
                        <h2>
                            <a href="{{ url('post', $post->id )}}" class="text-white">{{ $post->title }}</a>
                            <time>
                                <small>/ {{ $post->created_at }}</small>
                            </time>
                        </h2>
                    <div class="post-content">
                        <p class="text-white">
                            {{ Str::limit( $post->text, 250) }}
                        </p>
                    </div>
                </article>

            @empty
                <p class="text-white">Žádné příspěvky zde zatím nejsou.</p>

            @endforelse
        </section>
    </div>

@endsection
