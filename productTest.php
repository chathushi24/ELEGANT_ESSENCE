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
    <div>
        <input type="text" name="name">
        <p>Name: <?= $data["name"] ?></p>
        <p>Description: <?= $data["description"] ?></p>
        <p>Price: <?= $data["price"] ?></p>
    </div>
</body>

<?php
require_once "database.php";
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO items VALUES (name=:name)";


// SQL query to select data
$sql = "SELECT * FROM items WHERE id=".$_GET['id']; // Adjust your_table to the name of your table
$result = mysqli_query($conn, $sql);






// Check for errors in query execution
if (!$result) {
    die("Error executing query: " . mysqli_error($conn));
}

$data = mysqli_fetch_assoc($result);

// Close the connection
mysqli_close($conn);
?>
