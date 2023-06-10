<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Store</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


</head>

<body>

    {{-- <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a href="#" class="navbar-brand">Book <i class="fas fa-book ms-1"></i><br><i
                    class="fas fa-shopping-cart me-1"></i><span>Store</span></a>
            <form action="{{ route('search') }}" class="input-group my-lg-0" method="get">
                <input type="search" name="query" id="" class="form-control" placeholder="Product Search">
                <button class="btn btn-outline-light my-2" type="submit">Search</button>
            </form>
            <ul class="navbar-nav" id="navbar">
                <i class="fas fa-bars" id="bars"></i>
                @Auth
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Category</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('all-productAndCategory') }}" class="nav-link">Product</a>
                    </li>
                    <li class="nav-item">
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                @else
                    <li class="nav-item dropdown d-block my-auto mx-2">
                        @if (auth()->user()->profile_photo)
                            <img src="{{ asset('uploads/users/' . auth()->user()->profile_photo) }}" width="40px"
                                data-bs-toggle="dropdown">
                        @else
                            <img src="{{ asset('images/unknown.png') }}" width="40px" data-bs-toggle="dropdown">
                        @endif
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="{{ route('profile') }}" class="dropdown-item"><i class="fas fa-user me-2"></i>
                                    Profile</a></li>
                            <li><a href="{{ route('logout') }}" class="dropdown-item"><i
                                        class="fa-solid fa-right-from-bracket me-2"></i> Logout</a></li>
                        </ul>
                    </li>
                @endguest
            </ul>
            <i class="fas fa-xmark" id="mark"></i>
        </div>
    </nav> --}}



    <nav id="navbar">
        <span id="logo">
            <a href="">Book <i class="fa-solid fa-book-bookmark"></i><br><i id="cart-icon"
                    class="fa-solid fa-cart-arrow-down"></i> Store</a>
        </span>
        <form action="{{ route('search') }}" class="ms-4" method="get" id="search">
            @csrf
            <input type="search" name="query" placeholder="Product Search">
            <button class="bg-dark text-light my-2" type="submit">Search</button>
        </form>
            <ul id="nav">
                <i class="fa fa-xmark" id="mark"></i>
                @auth
                    <li class="nav-item dropdown" id="mini-logo">
                        @if (auth()->user()->profile_photo)
                            <a href="{{route('profile')}}"><img src="{{ asset('uploads/users/' . auth()->user()->profile_photo) }}" width="40px"
                                data-bs-toggle="dropdown"></a>
                        @else
                            <a href="{{route('profile')}}"><img src="{{ asset('images/unknown.png') }}" width="40px" data-bs-toggle="dropdown"></a>
                        @endif
                    </li>
                @endauth
                <li id="nav-item" active><a href="{{ route('home') }}">Home</a></li>
                <li id="nav-item"><a href="">Category</a></li>
                <li id="nav-item"><a href="">Contact</a></li>
                <li id="nav-item"><a href="{{ route('all-productAndCategory') }}">Product</a></li>
                <li class="nav-item" id="external-logout"><a href="{{ route('logout') }}" class=" text-decoration-none">
                        <i class="fa-solid fa-right-from-bracket d-inline"></i> <span>LogOut</span></a></li>
                @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                @else
                    <li class="nav-item dropdown d-block my-auto ms-1 me-5 d-lg-block d-sm-none">
                        @if (auth()->user()->profile_photo)
                            <img src="{{ asset('uploads/users/' . auth()->user()->profile_photo) }}" width="40px"
                                data-bs-toggle="dropdown">
                        @else
                            <img src="{{ asset('images/unknown.png') }}" width="40px" data-bs-toggle="dropdown">
                        @endif
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="{{ route('profile') }}" class="dropdown-item"><i class="fas fa-user"></i>
                                    Profile</a>
                            </li>
                            <li><a href="{{ route('logout') }}" class="dropdown-item">
                                    <i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                @endguest

            </ul>
            <i class="fas fa-bars me-4" id="bar"></i>
    </nav>



    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    @stack('script')
</body>

</html>
