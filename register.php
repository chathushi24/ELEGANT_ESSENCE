<?php

require "connection.php";
        if (isset($_POST["submit"])){
            $Fullname = $_POST["Fullname"];
            $email = $_POST["Email"];
            $password = $_POST["Password"];
            $passwordRepeat = $_POST["Repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            if (empty($Fullname) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
                array_push($errors,"All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors,"Email is not valid");
            }
            // if (strlen($password)<8){
            //     array_push($errors,"password must be atleast 8 characters long");
            // }
            if ($password!==$passwordRepeat){
                array_push($errors,"Password does not match");
            }

            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result);
            if ($rowcount>0){
                array_push($errors, "Email already exists");
            }

            if (count($errors)>0){
                foreach ($errors as $error){
                    echo "<div class= 'alert alert-danger'>$error</div>";
                }
            }else{
                //we will insert the data into the database
           
                Database::iud("INSERT INTO `user` (fullname,email,password) VALUES ('$Fullname','$email','$password')");
                // $stmt = mysqli_stmt_init($conn);
                // $preparestmt = mysqli_stmt_prepare($stmt,$sql);
                // if ($preparestmt){
                //     mysqli_stmt_bind_param($stmt, "sss", $Fullname,$email, $passwordHash);
                //     mysqli_stmt_execute($stmt);
                //     echo "<div class='alert alert-success'>You are registered successfully.</div>";
                //     // echo "You are registered successfully";
                // }else{
                //     die ("something went wrong");
                // }
                ?>
                <script>
                    window.location = "login.php";
                </script>
                <?php
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