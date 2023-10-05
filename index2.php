<!DOCTYPE html>
<html lang="en">


<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style1.css">
</head>

<body>




    <div class="header">
        <div class="container">
            <div class="navbar">

                <div class="logo">

                    <img src="images/logo3.png" alt="img" width="135px" />

                </div>

                <nav>
                    <ul id="MenuItems">

                        <li><a href="index2.php">Home</a></li>
                        <li><a href="categories2.html">Categories</a></li>
                        
                        <li><a href="index.php">Logout</a></li>
                        <li><a href="about.html">About</a></li>

                    </ul>

                </nav>

                <a href=""><img style="margin-right:20px" src="images/cart.png" width="30px" height="30px" alt="cartimg"></a>
              

                <h3 style="font-family:'Segoe UI"> <span><?php echo $_SESSION['user_name'] ?></span></h3>

                <img src="images/menu.png" class="menu-icon" alt="menu" onclick="menutoggle()">

            </div>



            <div class="row">

                <div class="col-2">
                    <h1>Bulid Your Dream Fashion<br> With Us</h1>
                    <p>A geniune men's collectoin.

                        A classic that is loved by all.<br>
                        Don’t stress about the dress, we’ll dress you to impress </p>

                    <a href='categories.html' class="btn">Explore &#8594</a>

                </div>

                <div class="col-2">
                    <img src="images/mainimage3.png" alt="img" />
                </div>

            </div>

        </div>

    </div>

    <!-- {/* Featured ----------- Categories */} -->

    <div class="categories">

        <div class="small-container">
            <div class="row">

                <div class="col-3">

                    <img src="images/tshirt1.jpg" alt='catg1' />

                </div>

                <div class="col-3">

                    <img src="images/tshirt2.jpg" alt='category-2' />


                </div>

                <div class="col-3">

                    <img src="images/tshirt3.jpg" alt='category-3' />


                </div>
            </div>
        </div>
    </div>


    <!-- {/* Featured -------- Products */} -->


    <div class="small-container">
        <h2 class="title">Featured Products</h2>

        <div class="row">

            <div class="col-4">
                <a href="blacktshirt.html"> <img src="images/puma-t1.jpeg" alt='img'></a>
                <h4>Black T-Shirt</h4>
                <div class="ratings">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>

                </div>

                <p>₹ 699</p>

            </div>



            <div class="col-4">
                <a href="shoe.html"><img src="images/product-nike1.jpg" alt='img'></a>
                <h4>Nike DownShifter 12</h4>
                <div class="ratings">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>

                <p>₹ 3799</p>

            </div>



            <div class="col-4">
                <a href="track_pant.html"><img src="images/product-3.jpg" alt='product-3'></a>
                <h4>Track Pants</h4>
                <div class="ratings">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i>


                </div>

                <p>₹ 499</p>

            </div>

            <div class="col-4">
                <a href="graytee.html"><img src="images/puma-1.jpeg" alt='product-4'></a>
                <h4>Gray Printed T-Shirt</h4>
                <div class="ratings">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>


                </div>

                <p>₹ 599</p>

            </div>
        </div>

        <h2 class="title">Latest Products</h2>

        <div class="row">

            <div class="col-4">
                <a href=""><img src="images/productshirt5.jpg" alt='product-5'></a>
                <h4>Red Checked Shirt</h4>
                <div class="ratings">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i>


                </div>

                <p>₹ 1299</p>

            </div>

            <div class="col-4">
                <a href=""><img src="images/product-6.jpg" alt='product-3'></a>
                <h4>Black Puma T-Shirt</h4>
                <div class="ratings">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                </div>

                <p>₹ 999</p>

            </div>



            <div class="col-4">
                <a href=""><img src="images/product-7.jpg" alt='product-7'></a>
                <h4>Socks Combo</h4>
                <div class="ratings">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>


                </div>

                <p>₹ 249</p>

            </div>

            <div class="col-4">
                <a href=""><img src="images/product-8.jpg" alt='product-8'></a>
                <h4>Premium Fossil Watch</h4>
                <div class="ratings">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>

                <p>₹ 2799</p>

            </div>
        </div>

        <div class="row">

            <div class="col-4">
                <a href=""><img src="images/product-9.jpg" alt='product-9'></a>
                <h4>Black Strap Watch</h4>
                <div class="ratings">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i>


                </div>

                <p>₹ 999</p>

            </div>

            <div class="col-4">
                <a href=""><img src="images/product-10.jpg" alt='product-3'></a>
                <h4>HRX Sport Shoes</h4>
                <div class="ratings">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>


                </div>

                <p>₹ 1599</p>

            </div>



            <div class="col-4">
                <a href=""><img src="images/product-glass.jpg" alt='product-3'></a>
                <h4>Polarised sunglasses</h4>
                <div class="ratings">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i>


                </div>

                <p>₹ 899</p>

            </div>

            <div class="col-4">
                <a href=""><img src="images/product-12.jpg" alt='product-3'></a>
                <h4>Track Pants</h4>
                <div class="ratings">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>


                </div>

                <p>₹ 599</p>

            </div>
        </div>

    </div>


    <!-- --------offers------- -->

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/exclusive.png" class="offer-img" alt='img'>
                </div>
                <div class="col-2">
                    <p>Exclusively Avilable on Us</p>
                    <h1>Smart Band 4</h1>
                    <small>Your journey to fitness begins with the Smart Band 4. With 6 workout modes to choose from, your every activity is tracked with accurate data reports for you to study and further your improve your regimen. These activities include pool swimming, outdoor running, cycling, treadmill, exercise and walking. The key improvement in pool swimming allows you to track laps, strokes and distance.</small><br>

                    <a href="checkout.php" class="btn">Buy Now &#8594</a>
                </div>
            </div>
        </div>
    </div>

    <!----------------- ----Testimonials----- --------------->

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, animi. Asperiores iste ut iure
                        illum?</p>
                    <i class="fa  fa-quote-left"></i>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>

                    <img src="images/user-1.png" alt='img'>
                    <h3>Simran</h3>
                </div>

                <div class="col-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, animi. Asperiores iste ut iure
                        illum?</p>
                    <i class="fa  fa-quote-left"></i>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>

                    <img src="images/user-2.png" alt='img'>
                    <h3>Nitin</h3>
                </div>

                <div class="col-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, animi. Asperiores iste ut iure
                        illum?</p>
                    <i class="fa  fa-quote-left"></i>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>

                    <img src="images/user-3.png" alt='img'>
                    <h3>Manvi</h3>
                </div>
            </div>
        </div>
    </div>


    <h2 class="title">Brands Partners</h2>
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/puma-logo.jpg" alt='img'>
                </div>

                <div class="col-5">
                    <img src="images/nike-logo.png" alt='img'>
                </div>

                <div class="col-5">
                    <img src="images/asics-logo.jpg" alt='img'>
                </div>

                <div class="col-5">
                    <img src="images/titan-logo.png" alt='img'>
                </div>

                <div class="col-5">
                    <img src="images/adidas-logo.jpg" alt='img'>
                </div>

                <div class="col-5">
                    <img src="images/h&mlogo.jpg" alt='img'>
                </div>


            </div>
        </div>
    </div>


    <h2 class="title">Paymemnts Partners</h2>
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/payments/Paytm.png" alt='img'>
                </div>

                <div class="col-5">
                    <img src="images/payments/Mastercard-Logo.jpg" alt='img'>
                </div>

                <div class="col-5">
                    <img src="images/payments/Maestro-Logo.png" alt='img'>
                </div>

                <div class="col-5">
                    <img src="images/payments/visa-logo.png" alt='img'>
                </div>

                <div class="col-5">
                    <img src="images/payments/PhonePe2.jpg" alt='img'>
                </div>


                <div class="col-5">
                    <img src="images/payments/Rupay.jpg" alt='img'>
                </div>



            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Now !</h3>
                    <p>Avilabe on both Android and iOS</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt='img'>
                        <img src="images/app-store.png" alt='img'>
                    </div>
                </div>

                <div class="footer-col-2">
                    <img src="images/logo0.png" alt='img'>
                    <p>A classic never goes out of style.

                        A classic that is loved by all.<br>
                        Don’t stress about the dress, we’ll dress you to impress</p>
                </div>

                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons & Offers</li>
                        <li>Terms & Conditions</li>
                        <li>Return Policy</li>
                        <li>Growths</li>
                    </ul>
                </div>

                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>FaceBook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="para">Copyright 2023 | E-Store</p>
        </div>

    </div>

    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
        
    </script>

</body>
 </html> 