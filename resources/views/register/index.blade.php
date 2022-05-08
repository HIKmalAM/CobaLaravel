@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-4">
    <main class="form-registration">
      <form action="/register" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Please Rgister</h1>
    
        <div class="form-floating">
          <input type="text" value="{{ old('name') }}" class="form-control rounded-top @error('name') is-invalid @enderror" id="nameInput" placeholder="name" name="name">
          <label for="floatingInput">Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
    
        <div class="form-floating">
          <input type="text" value="{{ old('username') }}" class="form-control  @error('username') is-invalid @enderror" id="usernameInput" placeholder="username" name="username">
          <label for="floatingInput">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
    
        <div class="form-floating">
          <input type="email" value="{{ old('email') }}" class="form-control  @error('email') is-invalid @enderror" id="emailInput" placeholder="name@example.com" name="email">
          <label for="floatingInput">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating ">
          <input type="password" class="form-control rounded-bottom  @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password">
          <label for="floatingPassword">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign in</button>

      </form>
      <small class="d-block text-center mt-3">Have Login ?? <a href="/login">Login Now!!</a></small>
    </main>
  </div>
</div>

@endsection 