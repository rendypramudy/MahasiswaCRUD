@extends('layout.idx')

@section('container')
<main class="form-signin w-100 m-auto">
    <form action="/login" method="POST">
        @csrf
      <h1 class="h3 mb-3 fw-bold">Please sign in</h1>

      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me </label>
      </div>
      <button class="w-100 btn btn-lg btn-warning mb-2" type="submit" >Sign in</button>
    </form>
    <small>Not registered? <a href="/register">Register Now</a></small>
  </main>
@endsection

<style>
.form-signin {
  max-width: 330px;
  padding: 15px;
}
.form-signin .form-floating:focus-within {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
