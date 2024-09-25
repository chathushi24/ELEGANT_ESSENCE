<?php
session_start();

// checking whether it's a admin or a user
if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST["password"];

    require "connection.php";

    $sql = Database::search("SELECT * FROM user WHERE fullname = '$username' AND password='$password'");
    $result = $sql->fetch_assoc();


    if ($result['fullname'] == $username && $result['password'] == $password) {
        $_SESSION["u"] = $result;
        Database::iud(query: "INSERT INTO `cart` (`user_id`) VALUES ('" .  $result["user_id"] . "')");
        // header("Location : index.php");
        // exit();

        if ($username == "admin" && $password == "1234") {
?>
            <script>
                window.location = "admin.php";
            </script>
        <?php
        } else {

        ?>
            <script>
                window.location = "index.php";
            </script>
<?php
        }
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
</head>

<body>
    <div class="container">
        <form action="login.php" method="post">
            <h1>Login Form</h1>
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
        <div>
            <p>Not Registered yet <a href="register.php">Register Here</a></p>
        </div>
    </div>
</body>

</html>