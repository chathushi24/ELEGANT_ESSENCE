<?php

session_start();
require "connection.php";


    if (isset($_GET["id"])) {

        $pid = $_GET["id"];


        $_SESSION["product_id"] = $pid;
        echo "Success";

    }
?>