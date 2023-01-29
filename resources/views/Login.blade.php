@extends('Template')

@section('Title','Hospitalyn | Login')

@section('Content')
<img src="img/homeBanner1.jpg" style="width:100%" alt="">
@if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card mt-5 justify-content-center text-center w-50 m-auto" >
    <div class="card-header"style="background-color: #7BF295 ; font-family: 'Nunito', sans-serif; box-shadow :3px 3px 7px grey">
        <h3 class="fw-normal text-white mt-2 text-align-center" >Login</h3>
    </div>
    <div class="card-body">
        <main class="form-registration w-75 m-auto">
            <form action="/login" method="POST">
                @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              {{-- <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" name="password" value="remember-me"> Remember me
                </label>
              </div> --}}
              <button class="w-100 btn " type="submit" style="background-color: #7BF295 ; font-family: 'Nunito', sans-serif; box-shadow :3px 3px 7px grey; color:white">Login</button>
            </form>
            <small class="">Don't have an account? <a href="/register" class="text-decoration-none" style="font-family: 'Nunito', sans-serif; color: #7BF295">Register now</a></small>
          </main>
    </div>
  </div>

<div style="margin-bottom:50px"></div>

@endsection
