<?php
require "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELEGANT ESSENCE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

    <!-- navbar -->
    <section id="header">
        <a href="#"><img src="images/L.png" class="logo" alt="logo"></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
                <li><button class="normal" onclick = "logout()">LOGOUT</button></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="hero" class="flex items-center justify-between shadow-[0_5px_15px_rgba(0,0,0,0.06)] z-[999] sticky px-20 py-5 left-0 top-0">
        <h4>Hello <?php echo $user = $_SESSION["u"]["fullname"];
        ?>,Welcome to the store</h4>
        <h2>Embrace yourself with </h2>
        <h1>ELEGANT ESSENCE</h1>
        <p>Trade-in-offer</p>

    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection 2024 With New Designs</p>
        <div class="pro-container">

        <!-- calling the products inserted in the database -->
            <?php

            $products = Database::search("SELECT * FROM `product` ");
            $num_rows = $products->num_rows;
        

            for ($i = 0; $i < 8; $i++) {
                $product_data = $products->fetch_assoc();

            ?>
                <div class="pro" >
                    <img src="<?php echo $product_data['img_url']; ?>" alt="fp1" >
                    <div class="des">
                        <h5><?php echo $product_data['title']; ?></h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4><?php echo $product_data['price']; ?></h4>
                    </div>
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" onclick="ViewProduct(<?php echo $product_data['product_id'] ?>)">View Product</button>
                </div>
            <?php

            }

            ?>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Discounts</h4>
        <h2>Up to <span>50% off</span> - All tops and skirts</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p> Collection 2024 With New Designs - July Drop</p>
        <div class="pro-container">

        <!-- calling the products inserted in the database -->
            <?php
        for ($i = 8; $i < $num_rows; $i++) {
                $product_data = $products->fetch_assoc();

            ?>
                <div class="pro" >
                    <img src="<?php echo $product_data['img_url']; ?>" alt="fp1" >
                    <div class="des">
                        <h5><?php echo $product_data['title']; ?></h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4><?php echo $product_data['price']; ?></h4>
                    </div>
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" onclick="ViewProduct(<?php echo $product_data['product_id'] ?>)">View Product</button>
                </div>
            <?php

            }

            ?>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your Email">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer id="footer" class="section-p1">
        <div class="col">
            <img class="logo" src="/images/logo1.jpeg" alt="logo">
            <h4>Contact</h4>
            <p><strong>Address: </strong> 613 park street, Union place </p>
            <p><strong>Phone:</strong> +94 0112918753</p>
            <p><strong>Hours:</strong>09:00 - 18:00, Mon - Sat</p>

            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms and conditionals</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign in</a>
            <a href="#">View cart</a>
            <a href="#">My wishlist</a>
            <a href="#">Track my order</a>
            <a href="#">Help</a>
        </div>

        <div class="copyright"></div>
        <p>2021, Tech2 ytd - HTML CSS Ecommerce website </p>
    </footer>












    <script src="script.js"></script>
</body>


</html>