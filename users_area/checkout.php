<?php 
    include('../includes/connect.php');
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="home-nav-logo">
                    <a href="../index.php"><img src="../assets/Asset 2112.png" alt="home-logo" class="home-nav-logo-img" style="width: 15%;"></a>
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
                    <form class="d-flex" action="search_product.php" method="GET">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="submit" value="Search" class="btn btn-outline-dark" name="search_data_product">
                    </form>
                    

                    
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
            
            <?php
                if(!isset($_SESSION['username'])){
                    echo "<li class='nav-item'>
                    <a href='#' class='nav-link'>Welcome Guest</a>
                </li>";
                }else{
                    echo "<li class='nav-item'>
                    <a href='#' class='nav-link'>Welcome ".$_SESSION['username']."</a>
                </li>";
                }

                 if(!isset($_SESSION['username'])){
                    echo "<li class='nav-item'>
                    <a href='./user_login.php' class='nav-link'>Login</a>
                </li>";
                 }else{
                    echo "<li class='nav-item'>
                    <a href='logout.php' class='nav-link'>Logout</a>
                </li>";
                 }
            ?>
            
            </ul>
        </nav>

        



        <div class="bg-light">
            <h3 class="text-center">Our Products</h3>
            <p class="text-center">Best Selling</p>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <?php
                        if(!isset($_SESSION['username'])){
                            include('user_login.php');

                        }else{
                            include('payment.php');
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>