@extends('layout')
@section('title', 'cart')
@section('main-content')
<style>
    .add-style-notPaid {
        color: white;
        background-color: red;
        padding: 5px 10px;
        border-radius: 10px;
        opacity: 0.6;
    }

    .add-style-Paid {
        color: white;

        background-color: green;
        padding: 5px 10px;
        border-radius: 10px;
        opacity: 0.6;
    }

    .remove-btn {
        display: none;
    }

    .main-box:hover {
        background-color: whitesmoke;
    }

    .main-box {
        padding: 10px;
        border-radius: 10px;
    }

    a {
        text-decoration: none;
    }
</style>
<div class="container cart-container d-flex flex-column justify-content-start gap-5">
    @if ($msg = Session::get('key'))
        <div class="alert alert-danger text-center animate__animated animate__fadeIn " id="login-successful-msg">{{$msg}}
        </div>
    @endif
    @if ($productDetails)
        @foreach ($productDetails as $productDetail)


            <div class="main-box d-flex justify-content-between">
                <div class="product-box d-flex">
                    <div class="box1">
                        <img src="{{$productDetail['productImage']}}" alt="" width='200' height="200">
                    </div>
                    <div class="box2 p-5">
                        <p style="max-width:60%;font-size:17px;font-weight:600;">{{$productDetail['productName']}}</p>
                        <P>Quantity {{$productDetail['quantity']}}</P>
                        <p>Total Amount &#8377;{{$productDetail['totalPrice']}}</p>
                        <p style="font-size:12px" class="payment-status">&nbsp;&nbsp;
                            STATUS <span
                                class="{{$productDetail['status'] == 'paid' ? 'add-style-Paid' : 'add-style-notPaid payment-button'}}">{{$productDetail['status'] == 'paid' ? 'paid' : 'not paid' }}</span>
                        </p>

                    </div>
                </div>
                <article class="d-flex align-items-center flex-column justify-content-center gap-3"><a
                        href="{{url('/delete', ['userCartId' => $productDetail['userCartId']])}}"><button
                            class="{{$productDetail['status'] != 'paid' ? 'btn btn-danger' : 'remove-btn'}}">remove</button></a>
                    <a href="{{url('/pay', ['userCartId' => $productDetail['userCartId'] , 'productName'=>$productDetail['productName']])}}"><button
                            class="{{$productDetail['status'] != 'paid' ? 'btn btn-success' : 'remove-btn'}}">pay</button></a>
                </article>
            </div>
        @endforeach

    @endif
</div>

<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('#login-successful-msg').hide();
        }, 2000);
    });
</script>

@endsection
