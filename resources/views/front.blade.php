@extends('layouts.base')

@section('content')

<div class="card shadow-none pd-20 mx-auto wd-300 text-center bd-1 align-self-center">
    <h4 class="card-title mt-3 text-center">Sing In</h4>
    <p class="text-center">Sing in to your account</p>
    @if(Session::has('success'))
    <div class="alert alert-success text-center">
        {{Session::get('success')}}
    </div>
    @endif
    <p>
        <a href="" class="btn btn-block btn-twitter tx-13 hover-white"> <i class="fa fa-twitter"></i> Login via
            Twitter</a>
        <a href="" class="btn btn-block btn-facebook tx-13 hover-white"> <i class="fa fa-facebook-f"></i> Login
            via facebook</a>
    </p>
    <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
    <form method="post" action="{{ route('login') }}">
        @csrf
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
        <p class="text-center"><a href="page-password.html">Forget Password?</a></p>
        <div class="form-group">
            <button type="submit" class="btn btn-custom-primary btn-block tx-13 hover-white"> Login </button>
        </div>
        <p class="text-center">Don't have an account?<br /> <a href="{{ route('signup')}}">Create Account</a> </p>
    </form>
</div>

@endsection