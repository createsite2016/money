@extends('layouts.auth')

@section('title', 'Регистрация')

@section('content')
<main class="form-signin">
    <form method="POST" action="/registration">
      @csrf
      <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name">
        @error('name')
          <div class="small text-danger pt-2">
            {{ $message }}
          </div>
        @enderror
        <label for="floatingInput">Ваше Имя</label>
      </div>
  
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        @error('email')
          <div class="small text-danger pt-2">
            {{ $message }}
          </div>
        @enderror
        <label for="floatingInput">Ваш e-mail</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        @error('password')
          <div class="small text-danger pt-2">
            {{ $message }}
          </div>
        @enderror
        <label for="floatingPassword">Ваш пароль</label>    
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Зарегистрироваться</button>
          
      <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
    </form>
  </main>
@endsection