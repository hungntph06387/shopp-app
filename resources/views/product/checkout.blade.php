<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    
        <div class="container">
            @if(Session::get('success'))
            <div class="alert alert-success">
               <h5>Thanks You! </h5> {{ Session::get('success') }}
            </div>
            @endif
            <form action="/checkout" method="post">
                @csrf
                <div class="d-flex justify-content-center">
                    <h3 style="color: #3498db; ">Your Cart</h3>
                    
                    
                </div>
                <h5 style="color: red; ">Total: {{$total}} $</h>
                <div class="form-group">
                            <input type="hidden" id="total" name="total" value="{{$total}}">
                        </div>
                <div class="form-group">
                    <label for="">Your Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ old('name') }}" >
                    <p style="color: red;">@error('name'){{$message}}@enderror</p>
                </div>
                <div class="form-group">
                    <label for="">Your Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter phone" value="{{ old('phone') }}">
                    <p style="color: red;">@error('phone'){{$message}}@enderror</p>
                </div>
                <div class="form-group">
                    <label for="">Your Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}">
                    <p style="color: red;">@error('email'){{$message}}@enderror</p>
                </div>
                <div class="form-group">
                    <label for="">Your Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter address" value="{{ old('address') }}">
                    <p style="color: red;">@error('address'){{$message}}@enderror</p>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
                <a href="/home" class="btn btn-danger btn-block" role="button" aria-pressed="true">Continue Buy</a>
            </form>
        </div>
   
</body>

</html>