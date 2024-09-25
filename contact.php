<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Essence</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>


<body>
    
    <!-- navbar -->
    <section id="header">
        <a href="#"><img src="./images/L.png" class="logo" alt="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a  href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
                <li><button class="normal">LOGOUT</button></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="contact-header">
        <h2>Contact Us</h>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit our website and contact with us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>613 park street, Union place, Colombo 02</p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>elegentessence@gmail.com</p>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p>+94 0112918753</p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p>09:00 - 18:00, Monday - Saturday</p>
                </li>
            </div>
        </div>
        <div class="form-details">
            <form action="">
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your name">
            <input type="text" placeholder="E-mail ">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your message"></textarea>
            <button class="normal">Submit</button>
            </form>
        </div>
    </section>

    <section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7803702095953!2d79.85630747522056!3d6.916841118467029!
        2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2596c60bdc389%3A0x9d8ed733e06cf0c5!2sPark%20Street%20Mews!5e0!3m2!1s
        en!2slk!4v1726158748605!5m2!1sen!2slk" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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