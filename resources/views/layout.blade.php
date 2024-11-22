<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fjalla+One&family=Nanum+Gothic+Coding&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    .nav-link i , .nav-link {
        font-size: 20px;
    }

    .main-content {
        position: relative;
    }

    * {
        font-family: "Poppins", serif;
        font-weight: 300;
        font-style: normal;
        scroll-behavior: smooth;
    }

    .navbar-brand,
    .navbar-brand>span {
        font-weight: 600;
    }

    .navbar-brand::first-letter,
    .navbar-brand>span {
        color: red;
    }

    .sub-nav-link {
        font-weight: 500;
        opacity: 0.6;
        transition: all 0.15ms;
    }

    .sub-nav-link:hover {
        opacity: 1;
    }

    .sub-nav-brandName-apple>span {
        font-weight: 700;
    }

    .sub-nav-brandName-oppo {
        color: green;
        font-weight: 700;
    }

    .sub-nav-brandName-mi {
        color: orangered;
        font-weight: 700;
    }

    header {
        background-color: white;
        border-bottom: 4px solid whitesmoke;
        height: 12%;

    }

    body {
        width: 100%;
        height: 90vh;

    }

    .layout-container {
        height: 100%;
        margin-top: 8%;
    }
</style>

<body>
    <header class="d-flex flex-column fixed-top">
        <nav class="container navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/home')}}">shopping<span>M</span>art</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- search box -->
                @if (!(request()->is('login')) && !(request()->is('register')))
                    <div style="position: relative;" class="w-100 mx-5">
                        <input type="text" placeholder="What are you looking for ?"
                            style="width: 100%; padding-left: 30px; height: 35px; border: 1px solid #ccc; border-radius: 5px;"
                            class="w-100" />
                        <i class="fa fa-search"
                            style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: gray;"></i>
                    </div>
                @endif

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/home')}}"><i
                                    class="bi bi-house-fill"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('authenticateCart')}}"><i
                                    class="bi bi-cart-fill ms-1"></i></a>
                        </li>
                        <li class="nav-item">

                            @if (Auth::check())

                                <a class="nav-link d-flex" >
                                    <span>{{auth()->user()->name}}



                                    </span>
                                    <form action="{{url('/logout')}}" method="POST">
                                        @csrf
                                        <button style="background:none;border:none"> <i
                                                class="bi bi-box-arrow-right" title="logout"></i></button>
                                    </form>
                                </a>

                            @else
                              <div class="d-flex">


                                <label for="user"><i class="bi bi-person align-center nav-link" style="font-size:20px"></i></label>
                                {!! request()->is('register') ? '<a id="user" href= "/login" class="nav-link">Login</a>' : '<a id="user" href= "/register" class="nav-link">Signup</i></a>'   !!}

                              </div>



                            @endif

                        </li>
                    </ul>
                </div>
            </div>
            <hr>
        </nav>

        @if (!(request()->is('login')) && !(request()->is('register')))
            <article class="d-flex justify-content-center">
                <p class="mx-3 sub-nav-link" type="button" onclick="document.querySelector('.for-electronics').scrollIntoView({ behavior: 'smooth' })">
                    Electronics</p>
                <p class="mx-3 sub-nav-link" type="button" onclick="document.querySelector('.for-mobile').scrollIntoView({ behavior: 'smooth' })">Mobile
                </p>
                <p class="mx-3 sub-nav-link" type="button" onclick="document.querySelector('.for-accessories').scrollIntoView({ behavior: 'smooth' })">
                    Accessories</p>
                <p class="mx-3 sub-nav-link" type="button" onclick="document.querySelector('.for-mobilecase').scrollIntoView({ behavior: 'smooth' })">
                    mobileCase</p>
                <p class="mx-3 sub-nav-link"> |</p>
                <p type="button" class="mx-3 sub-nav-brandName-apple"><i class="bi bi-apple"></i><span>Apple</span></p>
                <p type="button" class="mx-3 sub-nav-brandName-oppo"> Oppo</p>
                <p type="button" class="mx-3 sub-nav-brandName-mi"> Mi</p>
            </article>
        @endif



    </header>
    <div class="container layout-container animate__animated animate__fadeIn ">
        @yield('main-content')


    </div>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
