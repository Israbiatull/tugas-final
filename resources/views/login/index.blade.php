@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
    <main class="form-signin w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

  <form action="/login" method="POST">

    @method('post')
    @csrf

      <div class="form-floating">
        <input type="text" class="form-control" name="username" id="floatingInput" placeholder="username">
        <label for="floatingInput">username</label>
      </div>
      <div class="form-floating">
        <input type="text" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
  </form>
</main> 
    </div>
</div>

@endsection