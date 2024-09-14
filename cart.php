<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Essence</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <!-- <link rel="stylesheet" href="main.css"> -->
</head>


<body>
    
    <section id="header">
        <a href="#"><img src="./images/L.png" class="logo" alt="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a  href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a class="active" href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="cart-header">
        <h2>Cart</h>
    </section>

    <section id="cart" class="section-p1">
        <table width=100%>
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                <td><img src="/images/f1.jpg" alt=""></td>
                <td>Brown California top</td>
                <td>LKR 2990</td>
                <td><input type="number" value="1"></td>
                <td>LKR 2990</td>
            </tr>
            <tr>
                <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                <td><img src="/images/f2.png" alt=""></td>
                <td>luxe stella dress</td>
                <td>LKR 5990 </td>
                <td><input type="number" value="1"></td>
                <td>LKR 5990 </td>
            </tr>
        </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter The Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>
    </section>

    <section>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>LKR 8980</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>LKR 8980</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>     
       </div>
    </section>

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