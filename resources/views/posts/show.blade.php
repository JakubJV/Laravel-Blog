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
            <footer class="post-footer">
                <div>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        @if(Auth::check() && Auth::user()->id == $post->user_id)
                        <button type="submit" class="btn btn-danger">Smazat</button>  
                    </form>
                    <a href="{{ url('post/edit', $post->id) }}" class="edit-post">Upravit příspěvek</a>
                    @endif
                    <a href="{{ url('post', $post->id) }}" class="read-more">Přečti si víc</a>
                </div>
            </footer>
        </article>
    </section>

@endsection