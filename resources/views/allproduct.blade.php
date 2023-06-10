@extends('Layout.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-around my-2 ">
            <p class="btn btn-white w-50 me-3" id="product">Products</p>
            <p class="btn btn-white w-50" id="category">Categories</p>
        </div>
        <a href="{{ route('product') }}" class="btn btn-primary d-block mx-auto text-center w-25 add my-2" id="add">
            <i class="fas fa-circle-plus fs-5 mt-1 me-2"></i>Add Product & Category</a>
        <div id="product-table">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="card bg-dark">
                            <div class="card-header text-light text-center mt-2">
                                <p>{{ $product->product_name }}</p>
                            </div>
                            <div class="card-body" id="img_center"><img
                                    src="{{ asset('uploads/products/' . $product->photo) }}" class="d-block mx-auto"
                                    width="250px" style=""></div>
                            <div class="card-footer container">
                                <a href="{{ url("/delete-product/$product->id") }}"
                                    class="btn btn-outline-danger float-end  ms-2">
                                    <i class="fas fa-trash text-center text-light me-1"></i>Delete</a>
                                <a href='{{ url("/edit-product/$product->id") }}' class="btn btn-outline-primary float-end">
                                    <i class="fas fa-edit text-center text-light me-1"></i>Edit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>




        <span class="container" id="category-table">
            <table class="table table-bordered table-striped">
                <tr class="text-center bg-primary text-light">
                    <th class="px-5">Category Name</th>
                    <th class="px-5">Edit</th>
                    <th class="px-5">Delete</th>

                </tr>
                @foreach ($categories as $category)
                    <tr class="text-center">
                        <td>{{ $category->category_name }}</td>
                        <td><a href="{{ url("/edit-category/$category->id") }}" class="btn btn-outline-primary"><i
                                    class="fas fa-edit text-primary text-dark me-1"></i>Edit</a></td>
                        <td><a href="{{ url("/delete-category/$category->id") }}" class="btn btn-outline-danger"><i
                                    class="fas fa-trash text-dark me-1"></i>Delete</a></td>
                    </tr>
                @endforeach

            </table>
        </span>

    </div>
@endsection
@push('script')
    <script>
        let product = document.querySelector('#product');
        let category = document.querySelector('#category');
        let product_table = document.querySelector('#product-table');
        let category_table = document.querySelector('#category-table');

        product.onclick = () => {
            product.style.backgroundColor = '#0D6EFD';
            category.style.backgroundColor = 'white';
            product_table.style.display = 'block';
            category_table.style.display = 'none';
        }

        category.onclick = () => {
            category.style.backgroundColor = '#0D6EFD';
            product.style.backgroundColor = 'white';
            category_table.style.display = 'block';
            product_table.style.display = 'none';
        }
    </script>
@endpush
