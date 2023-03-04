@extends('master')
@section('title', 'Vytvoření příspěvku')

@section('content')

    <form method="post" action="{{route ('store')}}" accept-charset="UTF-8">
        @csrf
        <div class="container-fluid">
            <label class="" for="title">Nadpis</label>
            <input type="text" name="title"><br>
            <label class="" for="text">Obsah</label>
            <textarea name="text" class="" rows="5" cols="50"></textarea>
            <button type="submit" class="">Přidat příspěvek</button>
        </div>
    </form>
@endsection