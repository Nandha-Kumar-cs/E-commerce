@extends('layout')
@section('title', 'ProductView')
@section('main-content')
<style>
    .card-img-top {
        width: 250px;
        height: 250px;
    }

    .card {
        display: inline-block;
        max-width: 600px;
    }

    .product {}

    .specification {}

    .btn {
        max-width: 300px;
    }
</style>
<div class="container product_view_container d-flex gap-4 justify-content-center">
    @php
        $productid = '';
        $productName = '';
        $productRating = '';
        $productPrice = '';
        $productEmiOption = '';
        $productDeliveryOption = '';
        $productCode = '';
       @endphp
    <div class="product">
        @if ($category == 1)

                @php
                    $productid = $product->productid;
                    $productName = $product->brand_name . $product->version;
                    $productRating = $product->rating;
                    $productPrice = $product->price;
                    $productEmiOption = $product->emi_option;
                    $productDeliveryOption = $product->delivery_option;
                    $productCode = $product->productCode;
                   @endphp

                <div class="card">
                    <img src="{{$product->img_link}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->brand_name}}{{$product->version}}</h5>

                        @if ($product->Limited_deal != '')
                            <span class="card-text bg-danger text-white p-1"
                                style="font-size:14px;border-radius:5px;">{{$product->Limited_deal}}</span>
                        @endif
                    </div>
                </div>

        @elseif($category == 4)



                @php
                    $productid = $product->acc_id;
                    $productName = $product->brand_name . $product->version;
                    $productRating = $product->rating;
                    $productPrice = $product->price;
                    $productEmiOption = $product->emi_option;
                    $productDeliveryOption = $product->delivery_option;
                    $productCode = $product->productCode;
                   @endphp


                <div class="card" id="{{$product->acc_id}}">
                    <img src="{{$product->img_link}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->brand_name}}{{$product->version}}</h5>
                        @if ($product->Limited_deal != '')
                            <span class="card-text bg-danger text-white p-1"
                                style="font-size:14px;border-radius:5px;">{{$product->limited_deal}}</span>
                        @endif
                    </div>
                </div>

        @elseif($category == 3)


                @php
                    $productid = $product->Case_id;
                    $productName = $product->CaseName;
                    $productRating = $product->Ratings;
                    $productPrice = $product->price;
                    $productEmiOption = $product->emi_option;
                    $productDeliveryOption = $product->delivery_option;
                    $productCode = $product->productCode;
                   @endphp


                <div class="card" id="{{$product->Case_id}}">
                    <img src="{{$product->img_link}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->CaseName}}</h5>
                        @if ($product->Limited_deal != '')
                            <span class="card-text bg-danger text-white p-1"
                                style="font-size:14px;border-radius:5px;">{{$product->limited_deal}}</span>
                        @endif
                    </div>
                </div>

        @elseif($category == 2)


                @php
                    $productid = $product->E_id;
                    $productName = $product->card_title;
                    $productRating = $product->rating;
                    $productPrice = $product->cost;
                    $productEmiOption = $product->emi_option;
                    $productDeliveryOption = $product->delivery_option;
                    $productCode = $product->productCode;
                   @endphp


                <div class="card" id="{{$product->E_id}}">
                    <img src="{{$product->img_link}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        @if ($product->limited_deal != '')
                            <span class="card-text bg-danger text-white p-1"
                                style="font-size:14px;border-radius:5px;">{{$product->limited_deal}}</span>
                        @endif


                    </div>
                </div>
        @endif
    </div>
    <div class="specification">
        <h3> {{$productName}}</h3>
        <div style="font-size:14px;color:#78B3CE;font-weight:bolder;">Visit the store</div>
        <div style="width:100px;border-radius:20px;" class="text-center bg-success text-white mt-1">
            {{ $productRating}}<i class="bi bi-star-fill ms-1" style="color:yellow;"></i>
        </div>
        <span class="mt-2"
            style="padding:2px;font-weight:600;font-size:12px;color:white;background-color:#54473F;">shopMart <span
                style="color:orangered;font-weight:600;">Choice</span></span>
        <hr>
        <article class="d-flex flex-column">
            <p style="font-size:20px;font-weight:600;">&#8377;{{ $productPrice }}</p>
            <p style="opacity:0.6;">M.R.P &nbsp;<span style="text-decoration:line-through;">
                    {{ $productPrice - 500 }}</span></p>
            <p>
                <label for="qty">Quantity</label>
                <input type="number" name="qty" id="qty" value="1" min="1" style="width:60px">
            </p>
            <p>inclusive All taxes</p>
            <a class="btn" id="add-to-cart" style="background-color: #FFAD60; color:black" href="javascript:void(0);">
                Add to cart
            </a>
        </article>
    </div>





</div>
<script>
    document.getElementById('add-to-cart').addEventListener('click', function () {
        const qty = document.getElementById('qty').value;
        const productId = "{{ $productid }}";
        const productCode = "{{ $productCode }}";
        const cost = "{{ $productPrice }}";

        // Use Laravel's route helper for the URL
        const url = `{{ route('addingProduct', [':productId', ':productCode', ':cost', ':qty']) }}`
            .replace(':productId', productId)
            .replace(':productCode', productCode)
            .replace(':cost', cost)
            .replace(':qty', qty);

        // Redirect or use the URL
        window.location.href = url;
    });
</script>

@endsection
