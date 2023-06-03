<?php
    include('../includes/connect.php');
    include('../functions/common_function.php');

    if(isset($_POST['admin_registration'])){
        $admin_username = $_POST['username'];
        $admin_email = $_POST['email'];
        $admin_password = $_POST['password'];
        $conf_admin_password = $_POST['conf_password'];

        $select_query = "SELECT * FROM `admin_table` WHERE admin_name = '$admin_username' OR admin_email = '$admin_email'";
        $result = mysqli_query($con, $select_query);
        $rows_count = mysqli_num_rows($result);
        if($rows_count > 0){
            echo "<script>alert('Username or email already exists!')</script>";
        }else if($admin_password != $conf_admin_password){
            echo "<script>alert('Passwords do not match!')</script>";
        }else{
            $hash_password = password_hash($admin_password, PASSWORD_DEFAULT);
            $insert_query = "INSERT INTO `admin_table` (admin_name, admin_email, admin_password) VALUES ('$admin_username', '$admin_email', '$hash_password')";
            $sql_execute = mysqli_query($con, $insert_query);
            if($sql_execute){
                echo "<script>alert('Registration successful!')</script>";
                echo "<script>window.open('index.php', '_self')</script>";
            }else{
                echo "<script>alert('Registration failed!')</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Registration</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Registration</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-xl-5">
                <img src="../assets/Artboard 1.png" alt="ad_img" class="img-fluid">
            </div>

            <div class="col-lg-6 col-xl-4">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" required>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="conf_password" class="form-label">Confirm Password</label>
                        <input type="password" name="conf_password" id="conf_password" class="form-control" placeholder="Confirm password" required>
                    </div>
                    <div class="">
                        <input type="submit" name="admin_registration" id="admin_registration" Value="Register" class="bg-info py-2 px-3 border-0">
                        <p class="small fw-bold mt-2 pt-1">Don't have an account? <a href="admin_login.php" class="text-decoration-none">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
