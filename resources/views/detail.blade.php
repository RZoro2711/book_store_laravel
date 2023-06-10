@extends('Layout.app')
@section('content')
    <div class="container">
        <div class="row mt-2 bg-dark p-4">
            <h5 class="text-center text-light mt-2 card-header mb-1">Detail of {{ $product->product_name }}</h5>
            <hr>
            <div class="col-12 col-md-6 col-lg-6 d-block mx-auto mb-3">
                <img class="d-block mx-auto" src="{{ asset('uploads/products/' . $product->photo) }}" width="470px">
            </div>
            <div class="col-12 col-md-6 col-lg-6 text-light d-block mx-auto">
                <div class="d-block my-auto mx-auto text-justify w-75">
                    Name<section>{{ $product->product_name }}</section>
                    <hr>
                    Author<p>{{ $product->author }}</p>
                    <hr>
                    Price<p>{{ $product->price }}</p>
                    <hr>

                    Rating <br>
                    <span class="d-inline">@if ($product->rating == 1 || ($product->rating > 1 && $product->rating <= 2))
                        <p class="text-warning">
                            <i class="fa-regular fa-star"></i>
                            <span class="ms-3 text-light">{{$product->rating}}</span> <hr>
                        </p>
                    @elseif ($product->rating >= 2 && $product->rating < 3)
                        <p class="text-warning">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span class="ms-3 text-light">{{$product->rating}}</span> <hr>
                        </p>
                    @elseif ($product->rating >= 3 && $product->rating < 4)
                        <p class="text-warning">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span class="ms-3 text-light">{{$product->rating}}</span> <hr>
                        </p>
                    @elseif ($product->rating >= 4 && $product->rating < 5)
                        <p class="text-warning">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span class="ms-3 text-light">{{$product->rating}}</span> <hr>
                        </p>
                    @elseif ($product->rating == 5)
                        <p class="text-warning">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span class="ms-3 text-light">{{$product->rating}}</span> <hr>
                        </p>
                    @endif
                </span>

                    Avaliable Quantity<p>{{ $product->quantity }}</p>
                    <hr>
                    Category<p>{{ $product->category->category_name }}</p>
                    <hr>
                    Description<p class="text-justify">{{ $product->description }}</p>
                    <hr>
                    <a href="" class="btn btn-outline-danger d-block mx-auto  ms-2">
                        <i class="fas fa-shopping-cart text-center text-light me-1"></i>Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
@endsection
