<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Essence</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

    <section id="header">
        <a href="#"><img src="./images/L.png" class="logo" alt="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
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
    <?php


    if (isset($_SESSION["product_id"])) {
        require "connection.php";

        $product_rs = Database::search("SELECT * FROM product WHERE `product_id`='" . $_SESSION['product_id'] . "'");
        $product_data = $product_rs->fetch_assoc();
        ?>

        <section id="details" class="section-p1">
            <div class="product-image">
                <img src="<?php echo $product_data['img_url']; ?>" width="100%">
            </div>

            <div class="product_details">
                <h6>Home</h6>
                <h4><?php echo $product_data['title'] ?></h4>
                <h2><?php echo $product_data['price']; ?></h2>
                <select id="size">
                    <option value="">Select Size</option>
                    <option value="xxl">XXL</option>
                    <option value="xl">XL</option>
                    <option value="large">Large</option>
                    <option value="medium">Medium</option>
                    <option value="small">Small</option>
                </select>
                <input type="number" value="1" id="qty"><br><br>
                <button class="normal" onclick="addToCart(<?php echo $product_data['product_id']; ?>);">Add To Cart</button>
                <h4>Product Details</h4>
                <Span> <?php echo $product_data['description']; ?></Span>
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
        <?php
    }
    ?>
    <footer class="section-p1">
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