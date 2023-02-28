@extends('master')
@section('title', 'Příspěvek')

@section('content')

    <section>
        <article class="post full-post">

            <header class="post-header">
                <h1 class="boxheading">
                    <a href="{{ URL::current()}}">{{ $post->title }}</a>
                    <time datetime="">
                        <small>{{ $post->created_at }}</small>
                    </time>
                </h1>
            </header>

            <div class="post-content">
                <p>
                    {{ $post->text }}
                </p>
            </div>
        </article>
    </section>

@endsection