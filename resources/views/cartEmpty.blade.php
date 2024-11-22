@extends('layout')
@section('title', 'cartEmpty')
@section('main-content')
<style>
    .bi-cart-x {
        font-size: 400px;
        opacity: 0.4;
    }

    .cart-empty {
        height: 70vh;

    }
</style>
<div class="container-fluid d-flex flex-lg-column justify-content-center align-items-center cart-empty">
    <i class="bi bi-cart-x"></i>
   
</div>
@endsection
