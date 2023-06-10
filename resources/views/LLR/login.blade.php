@extends('layout.app')
@section('title', 'Login')
@section('content')
    <div class="register-login-main d-block mx-auto">
        @if ($message = Session::get('success'))
            <span class="alert alert-success d-block mx-auto text-center"><i class="fa-solid fa-dragon"></i>  {{$message}}</span>
        @endif
        @if ($message = Session::get('fail'))
            <span class="alert alert-success d-block mx-auto text-center"><i class="fa-solid fa-triangle-exclamation"></i>  {{$message}}</span>
        @endif
        <div class="container register-login-div ">
            <p class="text-center bg-primary text-light p-1 d-block w-25 rounded mx-auto">Book <i class="fas fa-book ms-1"></i><br><i
                class="fas fa-shopping-cart me-1"></i><span>Store</span></p>
            <h5 class="text-center">Login in to Your Account</h5>
            <p class="text-center">
                <i class="fa-solid fa-mug-hot"></i>
                 Welcome Back !
                <i class="fa-solid fa-mug-hot"></i>
            </p>
            <form action="{{route('validate_login')}}" method="post">
                @csrf
                <div class="mb-3 form-floating">
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Emain">
                    <label for="email">Enter Your Email</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                    <label for="password">Enter Your Password</label>
                </div>
                <button class="btn btn-primary w-100">Login</button>
            </form>
            <p class="text-center mt-2">or</p>
            <a href="{{route('google-auth')}}" class="signingoogle w-100 text-dark"><img src="{{asset('images/google.png')}}" class="me-2">Sign in with GOOGLE</a>
        </div>
    </div>
@endsection
