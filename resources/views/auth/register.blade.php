<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WatchStore | Ecommerce Website</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
    <div class="bg-img">
        <div class="content">
            @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            <header>Register Form</header>
            <form action="/register" method="post">
            @csrf
                <div class="field">
                    <span class=""></span>
                    <input type="text" name="name" placeholder="Enter your name" value="{{ old('name') }}">   
                </div>
                <p style="color: red;">@error('name'){{$message}}@enderror</p>
                <div class="field space">
                    <span class=""></span>
                    <input type="text" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                </div>
                <p style="color: red;">@error('email'){{$message}}@enderror</p>
                <div class="field space">
                    <span class=""></span>
                    <input type="password" name="password" placeholder="Enter password">
                </div>
                <p style="color: red;">@error('password'){{$message}}@enderror</p>
                <div class="field space">
                    <span class=""></span>
                    <input type="password" placeholder="Confirm password">
                    <br>
                </div>
                <p style="color: red;">@error('cfpw'){{$message}}@enderror</p>
                <button type="submit" class="my-btn1">Register</button>
                <div class="singup">You have account?
                    <a href="/login">Login Now</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>