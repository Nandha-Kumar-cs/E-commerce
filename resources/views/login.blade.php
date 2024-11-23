@extends('layout')
@section('title')
Login
@endsection
<style>
    .login-container {
        height: 80%;
    }

    #login-form {
        padding: 50px;
        box-shadow: 0px 0px 3px;
    }
</style>
@section('main-content')
<div class="container-fluid col-lg-10 login-container d-flex flex-column justify-content-center align-items-center">
    <form action="{{ url('authenticate') }}" method="POST" id="login-form">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" style="width:350px !important">

            @if ($errors->has('email'))
                <span class="text-danger" style="font-size:14px;"> {{ $errors->first('email')}}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">

            @if ($errors->has('password'))
                <span class="text-danger" style="font-size:14px;">{{ $errors->first('password')}}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    @if ($msg = Session::get('key'))
        <div class="alert alert-danger text-center animate__animated animate__fadeIn ">{{$msg}}</div>
    @endif
</div>

<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('#error-msg').hide();
        });

    });
</script>

@endsection
