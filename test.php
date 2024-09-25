<?php

require "connection.php";

if (isset($_POST["submit"])) {
    $Fullname = $_POST["Fullname"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $passwordRepeat = $_POST["Repeat_password"];

    // Hash the password
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    // Check for empty fields
    if (empty($Fullname) || empty($email) || empty($password) || empty($passwordRepeat)) {
        array_push($errors, "All fields are required");
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }

    // Check if passwords match
    if ($password !== $passwordRepeat) {
        array_push($errors, "Password does not match");
    }

    // Check if the email already exists
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        array_push($errors, "Email already exists");
    }

    // Display errors
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        // Insert data into the database
        $sql = "INSERT INTO user (fullname, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'sss', $Fullname, $email, $passwordHash);

        if (mysqli_stmt_execute($stmt)) {
            // Redirect to login page
            echo '<script>window.location = "login.php";</script>';
        } else {
            echo "<div class='alert alert-danger'>Error in registration</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1> Register Now</h1>
        <form action="register.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control"  name="Fullname" placeholder="Fullname">
            </div>
            <div class="form-group">
                <input type="Email" class="form-control"  name="Email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control"  name="Password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control"  name="Repeat_password" placeholder="Repeat password">
            </div>
            <div class="form-btn">
                <input type="submit" class="normal"  value="Register" name="submit" >
            </div>
        </form>
        <br>
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
    </div>
</body>
</html>
