<?php
    include('../includes/connect.php');
    include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .btn{
            background-color: #3A3086;
            border-radius: 0;
        }
        .home-nav-logo-img {
            width: 100%;
            margin-left: 5%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="home-nav-logo">
                    <a href="../index.php"><img src="../assets/logo_ybc.png" alt="home-logo" class="home-nav-logo-img" style="width: 15%;"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container-fluid my-3">
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="lg-12 col-xl-6">
                <form action="" method="post">
                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter username" autocomplete="off" required name="user_username"/>
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="email" id="user_email" class="form-control" placeholder="Enter email" autocomplete="off" required name="user_email"/>
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter password" autocomplete="off" required name="user_password"/>
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="conf_user_password" class="form-label">Confirm Password</label>
                        <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm password" autocomplete="off" required name="conf_user_password"/>
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="user_address" class="form-label">Enter address</label>
                        <input type="text" id="user_address" class="form-control" placeholder="Enter address" autocomplete="off" required name="user_address"/>
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="user_contact" class="form-label">Enter contact number</label>
                        <input type="text" id="user_contact" class="form-control" placeholder="Enter contact details" autocomplete="off" required name="user_contact"/>
                    </div>

                    <div class="mt-4 pt-2 w-50 m-auto">
                        <input type="submit" value="Register" class="btn btn-primary py-2 px-3 border-0" name="user_register">
                        <p class="small fw-bold mt-2 pt-1">Already have an account ? <a href="user_login.php" class="text-danger">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php

    if(isset($_POST['user_register'])){
        $user_username = $_POST['user_username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
        $conf_user_password = $_POST['conf_user_password'];
        $user_address = $_POST['user_address'];
        $user_contact = $_POST['user_contact'];
        $user_ip = getIPAddress();

        $select_query = "SELECT * FROM `user_table` WHERE username = '$user_username' OR user_email = '$user_email'";
        $result = mysqli_query($con, $select_query);
        $rows_count = mysqli_num_rows($result);
        if($rows_count > 0){
            echo "<script>alert('Username or email already exists!')</script>";
        }else if($user_password != $conf_user_password){
            echo "<script>alert('Passwords do not match!')</script>";
        }else{
            $insert_query = "INSERT INTO `user_table` (username, user_email, user_password, user_ip, user_address, user_mobile) VALUES ('$user_username', '$user_email', '$hash_password', '$user_ip', '$user_address', '$user_contact')";
            $sql_execute = mysqli_query($con, $insert_query);
        }

        $select_cart_items = "SELECT * FROM `cart_details` WHERE ip_address = '$user_ip'";
        $result_cart = mysqli_query($con, $select_cart_items);
        $rows_count = mysqli_num_rows($result_cart);
        if($rows_count > 0){
            $_SESSION['username'] = $user_username;
            echo "<script>alert('You've items in your cart')</script>";
            echo "<script>alert('checkout.php', '_self')</script>";
        }else{
            echo "<script>window.open('../index.php', '_self')</script>";
        }
    }
?>
