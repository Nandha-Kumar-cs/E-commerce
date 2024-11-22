@extends('layout')
@section('title', 'Register')
@section('main-content')
<style>
    .register-container {
        height: 80%;
    }

    #register-form{
        padding: 50px;
        box-shadow: 0px 0px 3px;
    }
</style>
<div class="container-fluid col-lg-10 register-container d-flex justify-content-center align-items-center">
    <form action="{{ url('store') }}" method="POST" id="register-form">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" style="width:350px !important">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            @if ($errors->has('email'))
                <span class="text-danger" style="font-size:14px;"> {{$errors->first('email')}}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="contact" name="contact">
            @if ($errors->has('contact'))
                <span class="text-danger" style="font-size:14px;"> {{$errors->first('contact')}}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <span class="text-danger" style="font-size:14px;"> {{ $errors->first('password')}}</span>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection
