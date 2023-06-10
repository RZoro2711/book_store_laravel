@extends('layout.app')
@section('title', 'Login')
@section('content')
    <div class="register-login-main d-block mx-auto">
        <div class="container register-login-div ">
            <p class="text-center bg-primary text-light p-1 d-block w-25 rounded mx-auto">Book <i class="fas fa-book  ms-1"></i><br><i
                class="fas fa-shopping-cart me-1"></i><span>Store</span></p>
            <h5 class="text-center">Create Your Own Account</h5>
            <p class="text-center">
                <i class="fa-solid fa-mug-hot"></i>
                 Welcome From Book Store
                <i class="fa-solid fa-mug-hot"></i>
            </p>
            <form action="{{route('registration')}}" method="post">
                @csrf
                <div class="mb-3 form-floating">
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                    <label for="name">Enter Your Name</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Emain">
                    <label for="email">Enter Your Email</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                    <label for="password">Enter Your Password</label>
                </div>
                <button class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
@endsection
