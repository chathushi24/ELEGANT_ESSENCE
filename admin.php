<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Essence</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <!-- <link rel="stylesheet" href="main.css"> -->
</head>

<body>
    
    <div class="add-pro">
    <form action="admin.php" method="POST">
        <div>
            <label for="">Item Name</label>
            <input type="text" name="item-name">
        </div>
        <div>
            <label for="">Item Description</label>
            <input type="text" name="item-desc">
        </div>
        <div>
            <label for="">Price</label>
            <input type="number" name="item-price">
        </div>
        <button type="submit">Submit</button>
    </form>
    </div>
</body>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "database.php";

    $name = $_POST["item-name"];
    $description = $_POST["item-desc"];
    $price = $_POST["item-price"];

    $sql = "INSERT INTO items (name, description, price) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    $preparestmt = mysqli_stmt_prepare($stmt, $sql);
    if ($preparestmt) {
        mysqli_stmt_bind_param($stmt, "sss", $name, $description, $price);
        mysqli_stmt_execute($stmt);
        echo "<div class='alert alert-success'>You have added item successfully.</div>";
        // echo "You are registered successfully";
    } else {
        echo "<div class='alert alert-success'>You have axcvbnm,.</div>";
        die("something went wrong");
    }
}
?>