<?php
require "connection.php";

// to remove products from admin dahsboard products
$product_id = $_GET["id"];

Database::iud(query: "DELETE FROM `product` WHERE `product_id` ='" . $product_id . "'");

echo "Success";

?>