<?php
session_start();

// transfering all the info in the shipping form to the db
require "connection.php";

$user = $_SESSION["u"];
$total = $_GET["total"];
$phone = $_GET["phone"];
$address = $_GET["address"];


Database::iud(query: "INSERT INTO `shipping` (`user_id`, `total_price`,`address`,`contact`) VALUES
('" . $user['user_id'] . "','" . $total . "','" . $address . "','" . $phone . "')");
$data = Database::search("SELECT * FROM `cart` WHERE `user_id`='".$user['user_id']."'");
$data_rs = $data->fetch_assoc();
Database::iud(query: "DELETE FROM `cart_product` WHERE `cart_id` ='" . $data_rs['cart_id'] . "'");

echo "Success";
// echo "Success";

?>