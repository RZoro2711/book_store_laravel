@extends('Layout.app')
@section('content')
<div class="w-50 register-login-main d-block mx-auto">
    <div class="conatiner register-login-div">
        <p class="text-center bg-primary text-light p-1 d-block w-25 rounded mx-auto">Book <i
                class="fas fa-book"></i><br><i class="fas fa-shopping-cart"></i><span>Store</span></p>
        <h5 class="text-center">Edit Product</h5>
        <p class="text-center">
            <i class="fa-solid fa-mug-hot"></i>
            Welcome From Book Store
            <i class="fa-solid fa-mug-hot"></i>
        </p>
        <form action="{{ route('update-category') }}" method="post" enctype="multipart/form-data" w-50>
            @csrf
            <input type="hidden" name="id" value="{{$category->id}}">
            <input type="text" name="category_name" class="form-control w-50 mb-3 d-block mx-auto" value="{{$category->category_name}}">
            <button class="btn btn-primary w-50 p-2">Edit Category</button>
        </form>



    </div>
</div>
@endsection
