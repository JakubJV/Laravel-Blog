@extends('master')
@section('title', '')



@section('content')

<form method="POST" action="/users" class="">
    @csrf
    <div>
      <label class="" for="name"> Jméno </label>
      <input type="text" name="name" value="{{old('name')}}" />
    </div>
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
      <label class="" for="password2">
        Potvrď heslo
      </label>
      <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" />
    </div>
    <div>
      <button type="submit" class="">
        Registruj se
      </button>
    </div>
    <div>
      <p>
        Už máš účet?
        <a href="/login" class="">Přihlaš se</a>
      </p>
    </div>
  </form>
  @endsection
