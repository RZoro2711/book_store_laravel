@extends('Layout.app')
@section('title', 'Book Store')
@section('content')


    <div class="swiper mySwiper bg-dark mt-3">
        <div class="swiper-wrapper">
            @foreach ($forswipers as $swiper)
                <div class="swiper-slide" id="swiper-slide">
                    <div>
                        <img src="{{ asset('uploads/products/' . $swiper->photo) }}">
                    </div>
                    <section class="bg-secondary">
                        <span>
                            <p>Name - {{ $swiper->product_name }}</p>
                            <p>Author - {{ $swiper->author }}</p>
                            <p>Category - <span class="badge bg-primary">{{ $swiper->category->category_name }}</span></p>
                            <a href="" class="btn btn-danger float-end  ms-2">
                                <i class="fas fa-shopping-cart text-center text-light me-1"></i>Add to Cart</a>
                            <a href='{{url('/detail/'.$swiper->id)}}' class="btn btn-primary float-end me-5">
                                <i class="fas fa-circle-info text-center text-light me-1"></i>Detail</a>
                        </span>
                    </section>
                </div>
            @endforeach

        </div>
        {{-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div> --}}
    </div>




    <div class="container mt-3">


        @if ($products->isNotEmpty())
            <div id="product-table">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="card bg-dark">
                                <div class="card-header text-light text-center mt-2">
                                    <p>{{ $product->product_name }}</p>
                                </div>
                                <span class="badge bg-primary text-center">{{ $product->category->category_name }}</span>
                                <div class="card-body" id="img_center"><img
                                        src="{{ asset('uploads/products/' . $product->photo) }}" class="d-block mx-auto"
                                        width="250px" style=""></div>
                                <div class="card-footer container">
                                    <a href="" class="btn btn-outline-danger float-end  ms-2">
                                        <i class="fas fa-shopping-cart text-center text-light me-1"></i>Add to Cart</a>
                                    <a href='{{url('/detail/'.$product->id)}}' class="btn btn-outline-primary float-end">
                                        <i class="fas fa-circle-info text-center text-light me-1"></i>Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p>No search results found.</p>
        @endif
    </div>
    @push('script')
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                // pagination: {
                //     el: ".swiper-pagination",
                //     clickable: true,
                // },
                // navigation: {
                //     nextEl: ".swiper-button-next",
                //     prevEl: ".swiper-button-prev",
                // },
            });
        </script>
    @endpush
@endsection
