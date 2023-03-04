@extends('master')
@section('title', 'Všechny příspěvky')

@section('content')

    <section class="box post-list">
        <h1 class="box-heading text-muted">
            Seznam Příspěvků 
        </h1>

        @forelse($posts as $post)

            <article id="post-{{ $post->id }}" class="post">
                <header class="post-header"></header>
                    <h2>
                        <a href="{{ url('post', $post->id )}}">{{ $post->title }}</a>
                        <time>
                            <small>/ {{ $post->created_at }}</small>
                        </time>
                    </h2>
                <div class="post-content">
                    <p>
                        {{ Str::limit( $post->text, 250) }}
                    </p>
                </div>
            </article>

        @empty
            <p>Žadné příspěvky zde zatím nejsou.</p>

        @endforelse
    </section>

@endsection