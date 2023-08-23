@extends('layouts.base')


@section('content')

<div class="card shadow-none pd-20 mx-auto wd-300 text-center bd-1 align-self-center">
    <h4 class="card-title mt-3 text-center">Sing In</h4>
    <p class="text-center">Sing in to your account</p>
    <p>
        <a href="" class="btn btn-block btn-twitter tx-13 hover-white"> <i class="fa fa-twitter"></i> Login via
            Twitter</a>
        <a href="" class="btn btn-block btn-facebook tx-13 hover-white"> <i class="fa fa-facebook-f"></i> Login
            via facebook</a>
    </p>
    <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
    <form method="post" action="{{ route('register') }}">
        @csrf
        <div class=" form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input name="firstname" class="form-control form-control-sm @error('firstname') is-invalid @enderror"
                placeholder="First name" type="text">
            @error('firstname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class=" form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input name="lastname" class=" form-control form-control-sm @error('lastname') is-invalid @enderror"
                placeholder="Last name" type="text">
            @error('lastname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text pd-x-9"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="email" class="form-control form-control-sm @error('email') is-invalid @enderror"
                placeholder="Email address" type="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input name="password" class="form-control form-control-sm @error('password') is-invalid @enderror"
                placeholder="Create password" type="password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
            </div>
            <input name="phone" class="form-control form-control-sm" placeholder="Phone number" type="text">
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input name="password_confirmation" class="form-control form-control-sm" placeholder="Repeat password"
                type="password">
        </div>
        <div class="custom-control custom-checkbox mg-t-25" style="display: initial;">
            <input type="checkbox" class="custom-control-input form-control-sm" id="customCheck1">
            <label class="custom-control-label tx-12 tx-gray-500" for="customCheck1">I agree to this <a href="">Terms &
                    Conditions</a></label>
        </div>
        <div class="custom-control custom-checkbox mg-b-10 pd-l-0">
            <input type="checkbox" class="custom-control-input form-control-sm" id="customCheck2">
            <label class="custom-control-label tx-12 tx-gray-500" for="customCheck2">I agree to this <a href="">Privacy
                    & Policy</a></label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-custom-primary btn-block tx-13"> Create Account </button>
        </div>
        <p class="text-center">Already Singed Up? <a href="{{route('front') }}">Sing In</a> </p>
    </form>
</div>

@endsection