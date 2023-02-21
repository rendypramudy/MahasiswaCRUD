@extends('layout.idx')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="POST">
                @csrf
              <h1 class="h3 mb-3 fw-bold">Register form</h1>
              <div class="form-floating">
                <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="floatingInput" placeholder="First Name">
                <label for="floatingInput">First Name</label>
                @error('first_name')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                @enderror
              </div>

            <div class="form-floating">
                <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="floatingInput" placeholder="Last Name">
                <label for="floatingInput">Last Name</label>
                @error('last_name')
                    <div class="invalid-feedback text-start mb=3">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
                @error('email')
                    <div class="invalid-feedback text-start mb=3">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Confirm Password</label>
                @error('confirm_password')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>

              <button class="w-100 btn btn-lg btn-warning" type="submit">Register</button>
            </form>
            <small>Allready registered? <a href="/login">Login Now</a></small>
        </main>
    </div>
</div>
@endsection

<style>
    .form-registration {
      max-width: 330px;
      padding: 15px;
    }
    .form-registration .form-floating:focus-within {
      z-index: 2;
    }
    .form-registration input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-registration input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    </style>
