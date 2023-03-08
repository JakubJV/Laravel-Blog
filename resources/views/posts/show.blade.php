@extends('master')
@section('title', 'Příspěvek')

@section('content')
<div class="h-100 d-flex align-items-center justify-content-center mt-5">
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
                <div class="form-group">
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        @if(Auth::check() && Auth::user()->id == $post->user_id)
                        <button type="submit" class="btn btn-danger mt-3 py-2">Smazat</button>  
                    </form>
                    <span class="mr-50">
                        <a href="{{ url('post/edit', $post->id) }}" class="btn btn-primary">Upravit příspěvek</a>
                    </span>
                    @endif
                </div>
            </footer>
        </article>
    </section>
</div>

@endsection