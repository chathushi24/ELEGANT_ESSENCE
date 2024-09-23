<?php
session_start();

if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST["password"];

    require "connection.php";

    $sql = Database::search("SELECT * FROM user WHERE fullname = '$username' AND password='$password'");
    $result = $sql->fetch_assoc();

    // $result = mysqli_query($conn, $sql);
    // $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // if ($user){
    //     if (password_verify($password,$user["password"])){
    //         header("Location: index.php");
    //         die();
    //     }else{
    //         echo "<div class='alert alert-danger'>password does not match </div>";
    //     }
    // }else{
    //      echo "<div class='alert alert-danger'>Username does not match </div>";
    // }

    if ($result['fullname'] == $username && $result['password'] == $password) {
        $_SESSION["u"] = $result;
        Database::iud(query: "INSERT INTO `cart` (`user_id`) VALUES ('" .  $result["user_id"] . "')");
        // header("Location : index.php");
        // exit();

        if ($username == "admin" && $password == "1234") {
?>
            <script>
                window.location = "admin/home.php";
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

    // $sql = "INSERT INTO login  (username,password) VALUES (?,?)";
    // $stmt = mysqli_stmt_init($conn);
    // $preparestmt = mysqli_stmt_prepare($stmt,$sql);
    // if ($preparestmt){
    //     mysqli_stmt_bind_param($stmt, "sss", $username, $passwordHash);
    //     mysqli_stmt_execute($stmt);
    //     echo "<div class='alert alert-success'>login successfully.</div>";
    //     // echo "You are registered successfully";
    // }else{
    //     die ("something went wrong");
    // }
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