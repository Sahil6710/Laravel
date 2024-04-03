<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/login.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/login.css') }}" />
    <!-- <script src="form.js"></script> -->
    <style>
        body{
            color: "black";
        }
        .content{
            justify-content : "center";
        }
        </style>
</head>

<body>
    @if ($errors->any())
<div class="alert alert-danger alert-dismissible alert-label-icon label-arrow shadow fade show" role="alert">
    {{-- <i class="ri-error-warning-line label-icon"></i> --}}
        @foreach ($errors->all() as $error)
            {!! $error !!}<br>
        @endforeach
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <div class="container">
        <form method="POST" action="{{route('login')}}">
            @csrf
            <h1 class="h1">Login</h1>
            <div class="content">
                <div class="box">
                    <label>Email</label>
                    <input type="text" id="email" placeholder="Enter Your email" name="email">
                </div>
                <div class="box"></div>
                <div class="box">
                    <label>Password</label>
                    <input type="text" id="password" placeholder="Enter Your Password" name="password"><br />
                </div>
                <div class="box"></div>
                <div class="box">
                    <button class="btn btn-primary" name="submit">Login</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>