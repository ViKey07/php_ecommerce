<?php
    include('../includes/connect.php');
    include('../functions/common_function.php');
    @session_start();
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
        html{
            font-family: 'Poppins';
        }
        body{
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .container-fluid{
            margin: 0;
            padding: 0;
        }
        div.home-nav-logo{
            width: 10%;
        }
        .home-nav-logo-img {
            width: 70%;
            margin-left: 10%;
        }

        .navbar-nav{
            display: flex;
            align-items: center;
        }
        .navbar-nav .nav-link {
            color: blue;
            font-weight: 600;
        }

        .nav-link{
            margin: 0 0.5em;
        }
        .right-nav{
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .icon-color{
            color: blue;
        }
        .nav-item{
            color: white;
        }
        .navbar-collapse {
            flex-grow: unset;
        }
        .btn{
            background-color: #3A3086;
            border-radius: 0;
        }
        .S9gUrf-YoZ4jf, .S9gUrf-YoZ4jf * {
            border: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        @media (max-width: 576px) {
        html{
            padding: 0;
            margin: 0;
        }
        body{
            padding: 0;
            margin: 0;
        }
        .container-fluid {
            margin: 0;
            padding: 0;
        }
        .home-nav-logo {
            width: 100%;
        }
        .home-nav-logo-img {
            margin-left: 3%;
            width: 100%;
        }
        .navbar-expand-lg {
            padding: 0.5em 1em;
        }
        .navbar-toggler-icon {
            filter: invert(1);
        }
        }
    </style>
</head>
<body>
<div class="container-fluid my-3">
<nav class="navbar navbar-expand-lg bg-light fixed-top" style="z-index: 100;">
            <div class="container-fluid">
                <div class="home-nav-logo">
                    <a href="../index.php"><img src="../assets/Asset 2112.png" alt="home-logo" class="home-nav-logo-img"></a>
                </div>
                <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse right-nav" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link m-0" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="contact_form.php">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">

                        <?php
                        if(!isset($_SESSION['user_email'])){
                            echo "<li class='nav-item'>
                                    <a href='./users_area/user_login.php' class='icon-color px-2 mx-1'><i class='fas fa-user'></i></a>
                                </li>";
                        }else{
                            echo "<li class='nav-item'>
                                    <a href='./users_area/profile.php' class='icon-color px-2 mx-1'><i class='fas fa-user'></i></a>
                                </li>";
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid" style="margin-top: 60px;">

        </div>

    
        <h2 class="text-center"> User Login</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="lg-12 col-xl-6">

                <form action="" method="post">
                    <div class="form-outline mb-4 w-50 m-auto">
                    <label for="user_email" class="form-label">Email</label>
                    <input type="email" id="user_email" class="form-control" placeholder="Enter email" autocomplete="off" required name="user_email"/>
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter password" autocomplete="off" required name="user_password"/>
                    </div>

                    <div class="mt-4 pt-2 w-50 m-auto">
                        <input type="submit" value="Login" class="btn btn-primary py-2 px-3 border-0" name="user_login">
                        <p class="small fw-bold mt-2 pt-1">Don't have an account ? <a href="user_registration.php" class="text-danger">Register</a></p>
                    </div>
                    <div id="google-signin-button"></div>
                </form>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-Rd1ShXYvd2c8Kil/wT5YlgYbYsMCfLGFQFYOMc43FbzX+R8vjvyzX9jtrXJLN32L" crossorigin="anonymous"></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script>
    // Initialize the Google Sign-In client
    function init() {
        google.accounts.id.initialize({
            client_id: '215792497641-k8483mpf67k4qhsv5e4bj0q98mal6lq8.apps.googleusercontent.com',
            callback: handleCredentialResponse
        });

        // Render the Google Sign-In button
        google.accounts.id.renderButton(
            document.getElementById('google-signin-button'),
            { theme: 'filled_blue', size: 'large' }
        );
    }

    // Handle the sign-in response
    function handleCredentialResponse(response) {
    if (response.credential) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'google_login.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                // Redirect or perform necessary actions upon successful login
                alert('Login successful!');
                window.location.href = '../index.php';
            } else {
                // Display an error message
                alert('Google login failed. Please try again.');
            }
        };
        xhr.send('id_token=' + response.credential);
    }
}

    // Initialize the Google Sign-In client on page load
    window.onload = function () {
        init();
    };
</script>
</body>
</html>

<?php
    global $con;
    if(isset($_POST['user_login'])){
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];

        $select_query = "SELECT * FROM `user_table` WHERE user_email = '$user_email'";
        $result = mysqli_query($con, $select_query);

        $row_count = mysqli_num_rows($result);
        $row_data = mysqli_fetch_assoc($result);
        $user_ip = getIPAddress();

        $select_query_cart = "SELECT * FROM `cart_details` WHERE ip_address = '$user_ip'";
        $select_cart = mysqli_query($con, $select_query_cart);
        $row_count_cart = mysqli_num_rows($select_cart);

        if($row_count > 0){
            $_SESSION['user_email'] = $user_email;
            if(password_verify($user_password, $row_data['user_password'])){
                // echo "<script>alert('Login Successful!')</script>";
                if($row_count == 1 and $row_count_cart == 0){
                    $_SESSION['user_email'] = $user_email;
                    echo "<script>alert('Login Successful!')</script>";
                    echo "<script>window.open('../index.php', '_self')</script>";
                }else{
                    $_SESSION['user_email'] = $user_email;
                    echo "<script>alert('Login Successful!')</script>";
                    echo "<script>window.open('../index.php', '_self')</script>";
                }
            }else{
                echo "<script>alert('Invalid credentials!')</script>";
            }
        }else{
            echo "<script>alert('Invalid credentials!')</script>";
        } 
    }
?>
