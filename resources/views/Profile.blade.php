@extends('Template')

@section('Title','Profile')

@section('Content')

<div class="card mt-5 justify-content-center text-center w-50 m-auto">
    <div class="card-header" style="background-color: #7BF295 ; font-family: 'Nunito', sans-serif; box-shadow :3px 3px 7px grey">
        <h3 class="fw-normal text-white mt-2 text-align-center">Account Info</h3>
    </div>
    <div class="card-body text-start">
        <form action="">
            <fieldset disabled>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Name</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="{{ $user->name }}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Email</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="{{ $user->email }}">
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Gender</label>
                    <select id="disabledSelect" class="form-select">
                      <option>{{ $user->gender }}</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Date of Birth</label>
                    <input type="date" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="{{ $user->dob }}">
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Country</label>
                    <select id="disabledSelect" class="form-select">
                      <option>{{ $user->country }}</option>
                    </select>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<div style="margin-bottom: 50px"></div>

@endsection
