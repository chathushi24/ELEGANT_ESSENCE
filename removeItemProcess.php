<?php

// to remove products from the cart
require "connection.php";

$product_id = $_GET["id"];

Database::iud("DELETE FROM `cart_product` WHERE `product_id`='".$product_id."'");

echo "Success";

?>