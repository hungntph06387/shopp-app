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
                        <li><a href="/home">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="/login">Login</a></li>
                    </ul>
                </nav>
                <div class="cart">
                    <img src="/images/cart.png" alt="" width="40px" height="40px">
                    <a href="#">Cart( {{ Session::has('cart') ? Session::get('cart')->totalQty : ''}} )</a>
                </div>
                
            </div>
            <!--END NAVBAR -->
        </div>
    </div>

    <!--START CART -->
    
    <div class="small-container cart-page">
    <a href="/home" class="my-btn"> Buy Continue</a>
    <a href="/removeCart" class="my-btn-remove">Remove Cart</a>
        <table>
            <thead>
                <tr>
                <th>ID</th>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            @if(Session::has('cart') != null)
            <tbody>
                @foreach(Session::get('cart')->items as $item)
                <tr>
                <td>{{$item['item']->id}}</td>
                    <td>{{$item['item']->name}}</td>
                    <td>
                        <img src="/images/{{$item['item']->image}}" alt="" width="150px" height="150px">
                    </td>
                    <td>{{$item['item']->price}}</td>
                    <td>{{$item['qty']}}</td>
                    <td>{{$item['price']}}</td>
                    <td> 
                    <a href="/delete-item-cart/{{$item['item']->id}}" class="btn btn-warning btn-block" role="button" aria-pressed="true">Remove</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            @endif
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Total</td>
                    <td> {{ Session::has('cart') ? Session::get('cart')->totalPrice : ''}} </td>
                </tr>
                <tr>
                <td></td>
                    <td>
                        <a href="/checkout" class="btn btn-success" role="button" aria-pressed="true">Checkout</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!--END CART -->


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