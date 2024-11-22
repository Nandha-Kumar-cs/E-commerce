@extends('layout')
@section('main-content')

<style>
    .carousel-item {
        transition: transform 0.5s ease !important;
        /* Adjust transition time */
        border: 1px solid black;
    }
</style>
@if ($msg = Session::get('success'))
    <div class="alert alert-success text-center animate__animated animate__fadeIn " id="login-successful-msg">{{$msg}}</div>
@endif

<!-- brand advertisements card slide  -->

<div id="brand_slide" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <span class="d-flex">
                <img src="https://cdn.grabon.in/gograbon/images/web-images/uploads/1621489082078/mi-coupon-codes.jpg"
                    class="d-block w-50" alt="...">
                <span class="d-flex flex-column w-50 mi-banner-text ps-3 align-items-center"
                    style="background-color:whitesmoke;">
                    <span>
                        <p style="color:orangered;font-size:60px;font-weight:600;" class="">Mi<span
                                style="color:black;opacity:0.6;font-size:30px"> & more</span></p>
                        <p style="color:black;font-size:30px;font-weight:700">Upto 50% Offers on all deals Shop now</p>
                        <button class="btn btn-secondary">shop</button>
                    </span>
                </span>
            </span>
        </div>
        <div class="carousel-item">
            <span class="d-flex">
                <img src="https://cdn.grabon.in/gograbon/images/web-images/uploads/1606975243181/apple-offers.jpg"
                    class="d-block w-50" alt="...">
                <span class="d-flex flex-column w-50 mi-banner-text ps-3 align-items-center"
                    style="background-color:whitesmoke;">
                    <span>
                        <p style="color:black;font-size:60px;font-weight:600;" class=""> <i
                                class="bi bi-apple"></i>Apple <span style="color:black;opacity:0.6;font-size:30px"> &
                                more</span></p>
                        <p style="color:black;font-size:30px;font-weight:700">Upto 50% Offers on all deals Shop now</p>
                        <button class="btn btn-secondary">shop</button>
                    </span>
                </span>
            </span>

        </div>
        <div class="carousel-item">
            <span class="d-flex">
                <img src="https://image.oppo.com/content/dam/oppo-campaign-site/in/events/store-opening/diwali-2021/10-18diwail/pcbanner2.jpg"
                    class="d-block w-50" alt="...">
                <span class="d-flex flex-column w-50 mi-banner-text ps-3 align-items-center"
                    style="background-color:whitesmoke;">
                    <span>
                        <p style="color:green;font-size:60px;font-weight:600;" class="">Oppo <span
                                style="color:black;opacity:0.6;font-size:30px"> & more</span></p>
                        <p style="color:black;font-size:30px;font-weight:700">Upto 50% Offers on all deals Shop now</p>
                        <button class="btn btn-secondary">shop</button>
                    </span>
                </span>
            </span>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#brand_slide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#brand_slide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- electronics style -->
    <style>
        .electronics-brand {
            opacity: 0.6;
            font-size: 25px;
        }

        .card {
            width: 300px !important;

        }

        .card-img-top {
            width: 250px;
            height: 250px;
        }

        .electronics-items {
            display: flex;
            flex-wrap: wrap;
        }

        .card-title {
            font-size: 15px;
        }

        .card {
            transition: 0.3s ease;

        }

        .card:hover {

            box-shadow: 0px 0px 6px;
            z-index: 9999;
            
        }
    </style>
    <div class="for-electronics container d-flex flex-lg-column mt-5">
        <h2 class="electronics-brand">Electronics</h2>
        <div class="electronics-items w-100 mt-3 d-flex">
            @foreach ($products as $product)


                <div class="card">
                    <img src="{{$product->img_link}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->card_title}}</h5>
                        <p class="card-text" style="font-size:12px">{{$product->card_text}}</p>

                        @if ($product->limited_deal != '')
                            <span class="card-text bg-danger text-white p-1"
                                style="font-size:14px;border-radius:5px;">{{$product->limited_deal}}</span>
                        @endif
                        <p class="card-text mt-2 mb-0">${{$product->cost}}</p>
                        <span class="card-text" style="font-size:12px;">{{$product->emi_option}}</span><br>
                        <span class="card-text" style="font-size:12px;">{{$product->delivery_option}}</span>
                        <a href="{{url('/addtocart/1')}}" class="btn"
                            style="background-color:yellow;color:black;border-radius:5px;opacity:0.8;">Add to cart</a>
                    </div>
                </div>


            @endforeach


        </div>

        <script>
            $(document).ready(function () {
                const isLogin = @json(Auth::check());
                if (isLogin) {
                    setTimeout(function () {
                        $('#login-successful-msg').hide();
                    }, 1000);
                }


            });
        </script>
        @endsection
