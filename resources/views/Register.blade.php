@extends('Template')

@section('Title','Hospitalyn | Register')

@section('Content')
<img src="img/homeBanner1.jpg" style="width:100%" alt="">

<div class="card mt-5 justify-content-center text-center w-50 m-auto">
    <div class="card-header " style="background-color: #7BF295 ; font-family: 'Nunito', sans-serif; box-shadow :3px 3px 7px grey; color:white">
        <h3 class="fw-normal text-white mt-2 text-align-center">Register Account</h3>
    </div>
    <div class="card-body">
        <main class="form-registration w-75 m-auto">
            <form action="/register" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Name">
                    <label for="floatingInput">Name</label>
                    @error('name')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
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
                <div class="mb-3">
                    <label for="" class="form-label float-start @error('gender') is-invalid @enderror">Gender</label>
                    <select id="" name="gender" class="form-select">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                    @error('gender')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="date" name="dob" class="form-control  @error('dob') is-invalid @enderror" id="floatingInput" placeholder="Date" max="2022-12-31">
                    <label for="floatingInput">Date of Birth</label>
                    @error('dob')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label float-start @error('country') is-invalid @enderror">Country</label>
                    <select id="" name="country" class="form-select">
                        <option value="">Select Country</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Malaysia">Malaysia</option>
                    </select>
                    @error('country')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="hidden" name="role" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Name" value="User">
                </div>
                <button class="w-100 btn btn-lg" type="submit" style="background-color: #7BF295 ; font-family: 'Nunito', sans-serif; box-shadow :3px 3px 7px grey; color:white">Register</button>
            </form>
            <small class="">Have an account? <a href="/login" class="text-decoration-none"style="font-family: 'Nunito', sans-serif; color: #7BF295">Login Here</a></small>
          </main>
    </div>
  </div>

  <div style="margin-bottom:50px"></div>


@endsection


<style>
    .form-registration input {
        margin-bottom: 10px;
    }
</style>
