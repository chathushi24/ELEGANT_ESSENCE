<?php
require "connection.php";

// to remove users from the admin dashboard

$user_id = $_GET["id"];

Database::iud(query: "DELETE FROM `user` WHERE `user_id` ='" . $user_id . "'");

echo "Success";

?>