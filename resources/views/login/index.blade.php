@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
    <main class="form-signin w-100 m-auto">
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
  <form>
    <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <!-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> -->
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
    <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> -->
  </form>
  <small class="d-block text-center mt-3">Not register? <a href="/register">register Now</a></small>
</main> 
    </div>
</div>

@endsection