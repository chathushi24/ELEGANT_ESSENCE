<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Essence</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="main.css">
</head>


<body>
    
    <section id="header">
        <a href="#"><img src="./images/L.png" class="logo" alt="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a  href="shop.php">Shop</a></li>
                <li><a class="active"href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section class="text-center text-pink text-4xl font-semibold">
        <h2>About Us</h>
    </section>


    <section id="about-head" class="flex items-center" >
        <img class="w-6/12 h-auto " src="images/abouthead.jpg">
        <div class="max-w-50 justify-center flexs align-middle">
            <p> Elegant Essence, your premier destination for chic, sophisticated, and trendy women's fashion. Founded in 2024, our mission is to bring you the latest styles and timeless classics that embody elegance and essence in every stitch.<br><br>

                At Elegant Essence, we believe that fashion is more than just clothing—it's a form of self-expression and confidence. Our carefully curated collections are designed to cater to the modern woman who appreciates quality, style, and versatility. From casual wear to statement pieces, each item is selected with attention to detail and a passion for fashion.<br><br>

                We are committed to providing an exceptional shopping experience, with a focus on personalized customer service, fast shipping, and a seamless online shopping journey. Whether you're looking for the perfect outfit for a special occasion or everyday essentials that elevate your style, Elegant Essence is here to inspire and empower you.<br><br>

                Join us on this fashionable journey and discover the essence of elegance with our exclusive collections. Thank you for choosing Elegant Essence, where every piece tells a story, and every woman shines with confidence.<br></p>
            <br><br>
            <marquee bg-color="hotpink" loop="-1" scrollamounts="5" width="100%" >Embrace yourself with Elegant Essence and shine brighter</marquee>
        </div>
    </section>
<br><br>
    <section id="head-video">
    <video autoplay muted loop class="w-full h-[550px] object-cover m-0 p-0" src="images/ELEGANTESSENCE.mp4" type="video/mp4"></video>
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