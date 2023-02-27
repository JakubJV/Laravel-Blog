@extends('master')
@section('title', '')


@section('content')

<form method="POST" action="/users/authenticate" class="">
    @csrf
    <div>
        <label class="" for="email">Email</label>
        <input type="email" name="email" value="{{old('email')}}" />
    </div>
    <div>
        <label class="" for="password">
        Heslo
        </label>
        <input type="password" name="password" value="{{old('password')}}" />
    </div>   
    <div>
    <button type="submit" class="">
        Přihlaš se
    </button>
    </div>
</form>
    
@endsection