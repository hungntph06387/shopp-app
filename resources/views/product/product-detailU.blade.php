<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
    <div class="my-header">
        <div class="mycontainer">
            <!--START NAVBAR -->
            <div class="navbar">
                <div class="logo">
                    <img src="/images/logo.jpg" alt="" width="125px">
                </div>
                <nav class="">
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </nav>
                <div class="cart">
                    <img src="/images/cart.png" alt="" width="40px" height="40px">
                    <a href="/cart">Cart( {{ Session::has('cart') ? Session::get('cart')->totalQty : ''}} )</a>

                </div>
                <div class="account">

                    <a href="#">{{$user->name}}</a> / <a href="/logout">Logout</a>
                </div>

            </div>
            <!--END NAVBAR -->

            <!--START Banner -->
            <!--END Banner -->
        </div>
        <div class="small-container">
            <h4 class="title">
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
            </h4>
        </div>
    </div>
    <div class="small-container single-product">
        <div class="myrow">
            <div class="my-col-2">
                <img src="/images/{{$product->image}}" alt="" width="100%" height="200px">
            </div>
            <div class="my-col-2">
            <form action="/add-to-cart/{{$product->id}}" method="get">
                @csrf
                <h2>{{$product->name}}</h2>
                <h4>{{$product->price}}</h4>
                <input type="number" name="quantity" value="1">
                <button type="submit" class="btn btn-secondary">Add To Cart</button>
                <h3>Product Detail</h3>
                <small>{{$product->description}}</small><br>
                <a href="/" class="my-btn"> Buy Continue</a>
                </form>
            </div>
        </div>
    </div>


    <div class="small-container">
        <h2 class="title">View More</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 my-col-4">
                <div class="card h-100">
                    <a href="#!"><img class="card-img-top" src="/images/product2.jpg" alt="" width="300px" height="300px" /></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#!">Skagen SKW6193</a></h4>
                        <h5>$24.99</h5>
                    </div>
                    <div class="card-footer rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 my-col-4">
                <div class="card h-100">
                    <a href="#!"><img class="card-img-top" src="/images/product3.jpg" alt="" width="300px" height="300px" /></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#!">Skagen SKW6193</a></h4>
                        <h5>$24.99</h5>
                    </div>
                    <div class="card-footer rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 my-col-4">
                <div class="card h-100">
                    <a href="#!"><img class="card-img-top" src="/images/product1.jpg" alt="" width="300px" height="300px" /></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#!">Skagen SKW6193</a></h4>
                        <h5>$24.99</h5>
                    </div>
                    <div class="card-footer rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--START FOOTER -->
    <div class="myfooter">
        <div class="mycontainer">
            <div class="myrow">
                <div class="footer-col-1">
                    <h3>Dowload Our App</h3>
                    <p>Download App for Android and Ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="/images/play.png" width="120px" height="50px" alt="">
                        <img src="/images/app.png" width="120px" height="50px" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img class="logo-footer" src="/images/logo.jpg" alt="" width="200px" height="200px">
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow US</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtobe</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="coppyright">Copyright 2021 - ShopWatch</p>
        </div>
    </div>
    <!--END FOOTER -->
</body>

</html>