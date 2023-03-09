@extends('master')
@section('title', 'Registrace')
  
@section('content')
  
<div class="container mx-auto text-primary">
  <h1 class="box-heading text-center">Registrace</h1>
    <form method="POST" action="/users" class="">
        @csrf
  
        <div class="form-group mt-sm-3">
          <label class="form-label" for="name"> Jméno </label>
          <input class="form-control" type="text" name="name" value="{{old('name')}}" />
          @error('name')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
  
        <div class="form-group mt-sm-3">
          <label class="form-label" for="email">Email</label>
          <input class="form-control mt-sm-1" type="text" name="email" value="{{old('email')}}" />
          @error('email')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
            
        <div class="form-group mt-sm-3">
          <label class="form-label" for="name">Heslo</label>
          <input class="form-control mt-sm-1" type="password" name="password" value="{{old('password')}}" />
          @error('password')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
  
        <div class="form-group mt-sm-3">
          <label class="" for="password2">Potvrď heslo</label>
          <input class="form-control mt-sm-1" type="password" name="password_confirmation" value="{{old('password_confirmation')}}" />
          @error('password_confirmation')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
  
        <div class="mt-sm-3">
          <button type="submit" class="btn btn-primary mt-sm-3">Registruj se</button>
        </div>
  
        <div class="mt-sm-3">
          <p>
            Už máš účet?
            <a href="/login" class="mt-sm-3">Přihlaš se</a>
          </p>
        </div>
  
      </form>
  </div>
@endsection
  
