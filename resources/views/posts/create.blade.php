@extends('master')
@section('title', 'Vytvoření příspěvku')

@section('content')
<div class="container text-primary">
    <h1 class="box-heading text-center text-black mt-5">Vytvoření příspěvku</h1>
        <form class="form mt-5"method="post" action="{{route ('store')}}" accept-charset="UTF-8">
            @csrf

            <div class="form-group mt-sm-3">
                <label for="title">Nadpis</label>
                <input class="form-control mt-sm-1" type="text" name="title"><br>
            </div>

            <div class="form-group mt-sm-3">
                <label class="" for="text">Obsah</label>
                <textarea name="text" class="form-control mt-sm-1" rows="5" cols="50"></textarea>
                <button type="submit" class="btn btn-primary mt-sm-3">Přidat příspěvek</button>
            </div>
        </form>
</div>
@endsection