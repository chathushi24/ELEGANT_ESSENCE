<?php

// add products to the website through the admin dashboard
require "connection.php";

$title = $_GET["title"];
$price = $_GET["price"];
$size = $_GET["size"];
$qty = $_GET["qty"];
$description = $_GET["description"];
$img_url = $_GET["img_url"];

Database::iud(query: "INSERT INTO `product` (`title`,`price`,`sizes`,`quantity`,`description`,`img_url`) VALUES('" . $title . "','" . $price . "','" . $size . "','" . $qty . "','" . $description . "','".$img_url."')");

echo "Success";