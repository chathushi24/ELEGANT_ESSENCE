<?php


if (isset($_POST["login"])){
    $username = $_POST['fullname'];
    $password = $_POST["password"];

    require_once "database.php";

    $sql = "SELECT * FROM users WHERE fullname = '$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user){
        if (password_verify($password,$user["password"])){
            header("Location: index.php");
            die();
        }else{
            echo "<div class='alert alert-danger'>password does not match </div>";
        }
    }else{
         echo "<div class='alert alert-danger'>Username does not match </div>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="text" placeholder="Enter your username" name="username" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter password" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="normal">
            </div>
        </form>
        <br>
        <div><p>Not Registered yet <a href="register.php">Register Here</a></p></div>
    </div>
</body>
</html>