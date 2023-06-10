@extends('layout.app')
@section('content')
            <div class="w-75 register-login-main d-block mx-auto">
                <div class=" register-login-div">
                    <p class="text-center bg-primary text-light p-1 d-block w-25 rounded mx-auto">Book <i
                            class="fas fa-book"></i><br><i class="fas fa-shopping-cart"></i><span>Store</span></p>
                    <h5 class="text-center">Add Product List</h5>
                    <p class="text-center">
                        <i class="fa-solid fa-mug-hot"></i>
                        Welcome From Book Store
                        <i class="fa-solid fa-mug-hot"></i>
                    </p>
                    <form action="{{ route('product-add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 form-floating w-100">
                            <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
                            <label for="book_name">Enter Book Name</label>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="mb-3 form-floating w-50 me-2">
                                <input type="text" name="author" class="form-control" placeholder="Enter Author Name">
                                <label for="author">Enter Author Name</label>
                            </div>
                            <div class="mb-3 form-floating w-50">
                                <input type="text" name="price" class="form-control" placeholder="Enter Product Price">
                                <label for="price">Enter Product Price</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content">

                            <div class="mb-3 form-floating w-50 me-1">
                                <input type="text" name="rating" class="form-control"
                                    placeholder="Enter Product Rating">
                                <label for="rating">Enter Product Rating</label>
                            </div>
                            <div class="mb-3 form-floating w-50 ms-1">
                                <input type="file" name="photo" class="form-control">
                                <label for="profile_photo">Input Your Photo</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="mb-3 form-floating w-50 me-2">
                                <input type="number" name="quantity" class="form-control"
                                    placeholder="Enter Product's Quantity">
                                <label for="quantity">Enter Product's Quantity</label>
                            </div>
                            <div class="mb-3 d-flex justify-content-around form-floating w-50">
                                <select name="category_id" class="form-select" id="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        {{ $category->id }}
                                    @endforeach
                                </select>
                                <label for="category">Select Category</label>
                                <a href="#" id="category_icon" class="py-2 px-2 d-block my-auto fs-3 rounded"
                                    data-bs-toggle="modal" data-bs-target="#category_div">
                                    <i class="fa-solid fa-circle-plus text-primary" title="Add New Category"></i>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">

                            <div class="mb-3 form-floating w-100">
                                <textarea name="description" class="form-control" placeholder="Enter Desctiption"></textarea>
                                <label for="description">Enter Desctiption</label>
                            </div>
                        </div>
                        <button class="btn btn-primary w-50 p-2">Add Product</button>
                    </form>

                    <div class="modal" id="category_div">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Category</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <form action="{{ url('/add-category') }}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="text" class="form-control" placeholder="Add new Category"
                                            name="category_name">
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary">Add Category</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



@endsection
