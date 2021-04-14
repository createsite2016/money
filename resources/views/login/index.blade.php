@extends('layouts.auth')

@section('title', 'Войти в личный кабинет')

@section('content')
<main class="form-signin">
    <form method="POST" action="/login">
      @csrf
      <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Войти в ЛК</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}">
        @error('email')
          <div class="small text-danger pt-2">
            {{ $message }}
          </div>
        @enderror
        <label for="floatingInput">Ваш e-mail</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        @error('password')
          <div class="small text-danger pt-2">
            {{ $message }}
          </div>
        @enderror
        <label for="floatingPassword">Ваш пароль</label>
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
          
      <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
    </form>
  </main>
@endsection