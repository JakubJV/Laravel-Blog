@extends('master')
@section('title', 'Všechny příspěvky')

@section('content')
    <div class="container mt-5">
        <section class="box post-list bg-light text-blue p-3 rounded">
            <h1 class="card-header text-capitalize mt-3">
                Seznam Příspěvků 
            </h1>

            @forelse($posts as $post)
            <div class="card mt-3 mb-4">
                <div class="card-body">
                    <header class="post-header">
                        <h2>
                            <a href="{{ url('post', $post->id )}}" class="text-blue">{{ $post->title }}</a>
                            <time>
                                <small>/ {{ $post->created_at }}</small>
                            </time>
                        </h2>
                    </header>
                    <div class="post-content">
                        <p class="text-blue">
                            {{ Str::limit( $post->text, 250) }}
                        </p>
                    </div>
                </div>
            </div>
            @empty
            <p>Žádné příspěvky k zobrazení.</p>
            @endforelse
        </section>
    </div>
@endsection

