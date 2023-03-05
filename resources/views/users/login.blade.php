@extends('master')
@section('title', '')


@section('content')

<div class="container mx-auto text-primary">
    <h1 class="box-heading text-center">Přihlášení</h1>
        <form method="POST" action="/users/authenticate" class="my-3">
            @csrf
            <div class="form-group mt-sm-3">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control mt-sm-1" id="exampleFormControlInput1" placeholder="name@example.com" value="{{old('email')}}" />
            </div>
            <div class="form-group mt-sm-3">
                <label class="" for="password">Heslo</label>
                <input class="form-control mt-sm-1" type="password" name="password" value="{{old('password')}}" />
            </div>   
            <div>
            <button type="submit" class="btn btn-primary mt-sm-3">Přihlaš se</button>
            </div>
        </form>
</div>
    
@endsection