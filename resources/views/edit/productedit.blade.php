@extends('layout.app')
@section('content')

    <div class="w-75 register-login-main d-block mx-auto">
        <div class="conatiner register-login-div">
            <p class="text-center bg-primary text-light p-1 d-block w-25 rounded mx-auto">Book <i
                    class="fas fa-book"></i><br><i class="fas fa-shopping-cart"></i><span>Store</span></p>
            <h5 class="text-center">Edit Product</h5>
            <p class="text-center">
                <i class="fa-solid fa-mug-hot"></i>
                Welcome From Book Store
                <i class="fa-solid fa-mug-hot"></i>
            </p>
            <form action="{{ route('update-product') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value='{{$product->id}}'>
                <div class="mb-3 form-floating w-100">
                    <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name"
                        value="{{ $product->product_name }}">
                    <label for="book_name">Enter Book Name</label>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="mb-3 form-floating w-50 me-2">
                        <input type="text" name="author" class="form-control" placeholder="Enter Author Name"
                            value="{{ $product->author }}">
                        <label for="author">Enter Author Name</label>
                    </div>
                    <div class="mb-3 form-floating w-50">
                        <input type="text" name="price" class="form-control" placeholder="Enter Product Price"
                            value="{{ $product->price }}">
                        <label for="price">Enter Product Price</label>
                    </div>
                </div>
                <div class="d-flex justify-content">

                    <div class="mb-3 form-floating w-50 me-1">
                        <input type="text" name="rating" class="form-control" placeholder="Enter Product Rating"
                            value="{{ $product->rating }}">
                        <label for="rating">Enter Product Rating</label>
                    </div>
                    <div class="mb-3 form-floating w-50 ms-1">
                        <input type="file" name="photo" class="form-control">
                        <label for="profile_photo">Input Your Photo</label>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="mb-3 form-floating w-50 me-2">
                        <input type="number" name="quantity" class="form-control" placeholder="Enter Product's Quantity"
                            value="{{ $product->quantity }}">
                        <label for="quantity">Enter Product's Quantity</label>
                    </div>
                    <div class="mb-3 d-flex justify-content-around form-floating w-50">
                        <select name="category_id" class="form-select">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        <label for="category">Select Product Category</label>
                    </div>
                </div>
                <div class="d-flex justify-content-between">

                    <div class="mb-3 form-floating w-100">
                        <textarea name="description" class="form-control" placeholder="Enter Desctiption">{{ $product->description }}</textarea>
                        <label for="description">Enter Desctiption</label>
                    </div>
                </div>
                <button class="btn btn-primary w-50 p-2">Edit Product</button>
            </form>



        </div>
    </div>
@endsection
