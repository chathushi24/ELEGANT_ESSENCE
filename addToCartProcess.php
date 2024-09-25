<?php
session_start();
require "connection.php";

// adding the items that we have selected to the cart
if (isset($_GET["id"]) && isset($_SESSION['u'])) {

    $user_id = $_SESSION["u"]["user_id"];
    $product_id = $_GET["id"];
    $size = $_GET["size"];
    $qty = $_GET["qty"];
    
    $cart = Database::search("SELECT * FROM `cart_product` WHERE `product_id`='" . $product_id . "'");
    $cart_product = $cart->fetch_assoc();

    $product_data = Database::search(query: "SELECT * FROM `product` WHERE `product_id`='" . $product_id . "'");
    $product_rs = $product_data->fetch_assoc();

    $cart_num = $cart->num_rows;
    
    if ($cart_num == 1) {
        $currentQty = $cart_product['quantity'];
        
        $newQty = (int)$currentQty + (int)$qty;
        $total_price = (int) $product_rs["price"] * (int)$newQty;
        Database::iud(query: "UPDATE `cart_product` SET `quantity`='" . $newQty . "',`total_price`='" . $total_price . "' WHERE `product_id` = '" . $product_id . "'");
        
        echo "Success";
    } else {
        
        $total_price1 = (int) $product_rs["price"] * (int)$qty;
        
        $result = Database::search(query: "SELECT `cart_id` FROM `cart` WHERE `user_id`='" . $user_id . "'");
        $result_data = $result->fetch_assoc();
        


        Database::iud(query: "INSERT INTO `cart_product` (`product_id`,`quantity`,`size`,`total_price`,`cart_id`) VALUES('" . $_GET["id"] . "','" . $qty . "','" . $size . "','" .  $total_price1 . "','" . $result_data['cart_id'] . "')");
        
        echo "Success";
    }
} else {
    echo "Failed";
}