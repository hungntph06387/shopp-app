<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WatchStore | Ecommerce Website</title>
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
                        <li><a href="/">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="/login">Login</a></li>
                    </ul>
                </nav>
                <div class="cart">
                    <img src="/images/cart.png" alt="" width="40px" height="40px">
                    <a href="/cart">Cart( {{ Session::has('cart') ? Session::get('cart')->totalQty : ''}} )</a>
                </div>
            </div>
            <!--END NAVBAR -->

            <!--START Banner -->
            <div class="myrow">
                <div class="my-col-2">
                    <h1>Give Your Watch <br> A New Style!</h1>
                    <p>A watch is a portable timepiece intended to be carried <br> or worn by a person. ... A wristwatch is designe.</p>
                    <a href="#" class="my-btn">Explore Now &#8594;</a>
                </div>
                <div class="my-col-2">
                    <img src="/images/image1.jpg" alt="">
                </div>
            </div>
            <!--END Banner -->
        </div>
    </div>

    <!--START CATEGORY -->
    <div class="category">
        <div class="small-container">
            <div class="myrow">
                <div class="my-col-3">
                    <img src="/images/category1.jpg" alt="">
                </div>
                <div class="my-col-3">
                    <img src="/images/category2.jpg" alt="">
                </div>
                <div class="my-col-3">
                    <img src="/images/category3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--END CATEGORY -->
    <div class="small-container">
        <h2 class="title">Categories</h2>
    </div>
    <div class="small-container-category">

        <nav class="">
            <ul>
                <li><a href="/">All Product</a></li>
                @foreach($categories as $category)
                <li><a href="/category/{{$category->id}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>

    <!--START PRODUCT -->
    <div class="small-container">
        <!-- Featured Products -->
        <h2 class="title">Hot Products</h2>
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

        <!-- Lastest Products -->
        <h2 class="title">Lastest Products</h2>
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-4 col-md-6 mb-4 my-col-4">
                <div class="card h-100">
                    <a href="/productDetail/{{$product->id}}"><img class="card-img-top" src="/images/{{$product->image}}" alt="" width="300px" height="300px" /></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#!">{{$product->name}}</a></h4>
                        <h5>${{$product->price}}</h5>
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
            @endforeach
        </div>
    </div>
    <!--END PRODUCT -->

    <!--START OFFER -->
    <div class="offer">
        <div class="small-container">
            <div class="myrow">
                <div class="my-col-2">
                    <img src="/images/offer1.jpg" class="offer-img" alt="">
                </div>
                <div class="my-col-2">
                    <p>Exclusively Available on ShopWatch</p>
                    <h1>Smart Band 4</h1>
                    <small>The Xiaomi Mi Smart Band 4 (Xiaomi Mi Band 4 in China) is a wearable activity tracker produced by Xiaomi Inc released in China on 16 June 2019,[2] in Europe on 26 June 2019[3] and in India on 19 September 2019. It is 39.9% larger than its predecessor, has a super capacitive AMOLED display and features 24/7 heart rate monitoring.</small>
                    <a href="" class="my-btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <!--END OFFER -->

    <!--START BRANDS -->
    <div class="brands">
        <div class="small-container">
            <div class="myrow">
                <div class="my-col-5">
                    <img src="/images/logo-rolex.jpg" alt="" width="200px" height="200px">
                </div>
                <div class="my-col-5">
                    <img src="/images/logo-th.png" alt="" width="200px" height="200px">
                </div>
                <div class="my-col-5">
                    <img src="/images/logo-hublot.png" alt="" width="200px" height="200px">
                </div>
                <div class="my-col-5">
                    <img src="/images/logo-ap.jpg" alt="" width="200px" height="200px">
                </div>
                <div class="my-col-5">
                    <img src="/images/logo-bf.png" alt="" width="200px" height="200px">
                </div>
            </div>
        </div>
    </div>
    <!--END BRANDS -->

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