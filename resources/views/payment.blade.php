@extends('layout')
@section('title', 'payment')
@section('main-content')
<style>
    .box {
        width: 100px;
        height: 100px;
        background-color: #9ABF80;
        border-radius: 50%;
    }

    .payment-container {
        width: 100%;
        height: 100%;
    }
    table{
        width: 300px !important;
    }
    table , tr ,td {
        border: 1px solid #ffffff;
        background-color: whitesmoke;
        box-shadow: 0px 0px 2px;
    }
</style>
<div class="container d-flex flex-column justify-content-center align-items-center mt-5 payment-container">
    <div class="box d-flex justify-content-center align-items-center ">
        <i class="bi bi-check2" style="color:white;font-weight:400;font-size:40px"></i>
    </div>
    <p class='mt-3' style="font-size:18px;text-transform:uppercase;font-weight:600;">{{auth()->user()->name}}</p>
    <p>payment of &#8377; <span style="font-weight:600;">{{$cost}}</span> was Successfully completed
    </p>
    <table class="table">
        <tr>
            <td>UserName</td>
            <td>{{$userName}}</td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td>{{$qty}}</td>
        </tr>
        <tr>
            <td>ProductName</td>
            <td>{{$pname}}</td>
        </tr>
        <tr>
            <td>CostPrice</td>
            <td>{{$cost}}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>{{$status}}</td>
        </tr>
    </table>
    <button class="btn btn-success">Download Receipt</button>
</div>
@endsection
