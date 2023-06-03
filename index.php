<?php 
    include('includes/connect.php');
    include('functions/common_function.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/Artboard 13.png">
    <title> YBC | COEP </title>
    <link rel="stylesheet" href="/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            width: 50%;
        }
        .home-nav-logo-img {
            width: 100%;
            margin-left: 5%;
        }
        .navbar-expand-lg{
            background-color: #3A3086;
            padding: 0.5em 0.5em;  
        }

        .card{
            border: none;
            background-color: #70809014;
            /* box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; */
            box-shadow: 10px 10px 25px -5px rgba(0,0,0,0.13), 0px 1px 4px 0px rgba(0,0,0,0.11);
        }
        .card2{
            border: none;
            /* box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; */
            box-shadow: 10px 10px 25px -5px rgba(0,0,0,0.13), 0px 1px 4px 0px rgba(0,0,0,0.11);
        }
        .card-img-top{
            background-color: #e7e7e7;
        }
        .nav-link{
            color: white;
        }
        .nav-item{
            color: white;
        }
        .btn-primary {
            color: #fff;
            background-color: #3A3086;
            border-color: #3A3086;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            /* box-shadow: 10px 10px 25px -5px rgba(0,0,0,0.13), 0px 1px 4px 0px rgba(0,0,0,0.11); */
        }
        .form-control{
            border-radius: 0;
            border-color: #3A3086;
        }
        .btn{
            background-color: #3A3086;
            border-radius: 0;
        }
        
        .carousel-control-prev,
        .carousel-control-next {
            font-weight: bold;
            color: white;
        }

        /* .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(100%); 
        } */
        /* #cat_div_full{
            background-color: #3A3086;
        } */

        #blue-hr {
            border-top: 2px solid #3A3086;
        }
        .product-list{
            margin-bottom: 20%;
        }
        .new-latest {
            display: flex;
            margin: 4%;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .new-latest-img {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 100%;
        }
        .c-img {
            max-width: 25%;
            height: auto;
            margin-bottom: 20px;
            object-fit: contain;
        }
        .new-latest-img .c-img {
            width: 50%;
            border: 1px solid rgb(225, 225, 225);
            transition: transform 0.5s ease;
            box-shadow: 5px 5px 15px silver;
        }

        .cat-trans{
            transition: transform 0.5s ease;
        }

        .cat-trans:hover{
            transform: scale(1.1);
        }

        .c-img:hover {
            transform: scale(1.1);
        }
        .custom-bg {
  background-color: #3A3086;
}
    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="home-nav-logo">
                    <a href="index.php"><img src="./assets/logo_ybc.png" alt="home-logo" class="home-nav-logo-img" style="width: 15%;"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">
                                <i class="fa fa-shopping-cart" style="color: #3A3086;"></i>
                                <sup style="background-color: red; color: white; border-radius: 50%; padding: 2px 6px;"><?php echo cart_item(); ?></sup>
                            </a>
                        </li>
                        

                        
                    </ul>
                    <form class="d-flex" action="search_product.php" method="GET">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="submit" value="Search" class="btn btn-primary" name="search_data_product">
                    </form>
                    
                    <?php
                        cart();
                    ?>
                    
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg">
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
                    <a href='./users_area/user_login.php' class='nav-link'>Login</a>
                </li>";
                }else{
                    echo "<li class='nav-item'>
                    <a href='./users_area/logout.php' class='nav-link'>Logout</a>
                </li>";
                }
            ?>
            
            </ul>
        </nav>

        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/COEP Merchandize.png" class="d-block w-100" alt="Carousel Image 1">
                </div>
                <div class="carousel-item">
                    <img src="./assets/COEP Merchandize1.png" class="d-block w-100" alt="Carousel Image 2">
                </div>
                <div class="carousel-item">
                    <img src="./assets/COEP Merchandize2.png" class="d-block w-100" alt="Carousel Image 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="bg-light my-5">
            <h3 class="text-center">Our Products</h3>
            <p class="text-center">Best Selling</p>
        </div>

        

        <div class="row d-flex justify-content-evenly my-5">
            <div class="col-md-10">
                <div class="row">
                    <?php
                        getproducts();
                        get_unique_categories();
                        
                    ?>
                </div>
            </div>
        </div>

        <div class="text-center my-2" id="cat_div_full">
            <ul class="navbar-nav d-flex">
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark"><h4>Categories</h4></a>
                </li>
                <div class="d-flex justify-content-center align-items-center">
                <?php
                    getcategories();
                ?>
                </div>
            </ul>
        </div>

        <div class="section">
            <div class="">
                <div class="row d-flex justify-content-between align-items-center w-100">
                    <div class="col-md-3">
                        <img src="./assets/3.png" alt="Image 1" class="img-fluid">
                    </div>
                    <div class="text-center col-md-6">
                        <p class="display-6">Relieve the memories</p>
                        <p class="display-5 fw-bold">Support your Alma mater.</p>
                        <hr class="blue-hr" id="blue-hr">
                    </div>
                    <div class="col-md-3">
                        <img src="./assets/1.png" alt="Image 2" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        

        <div class="row d-flex justify-content-evenly my-5">
            <div class="col-md-10">
                <div class="row">
                    <?php
                        getproducts();
                        get_unique_categories();
                        
                    ?>
                </div>
            </div>
        </div>

        <?php include('service_bar.php'); ?>


        <section class="section new-latest">
            <div class="product-heading">
                <h2 class='product-list'>New Latest</h2>
            </div>
                
                <div class="new-latest-img">
                    <img src="./assets/coep1.png" alt="" class="c-img" />
                    <img src="./assets/coep2.png" alt="" class="c-img" />
                    <img src="./assets/coep31.png" alt="" class="c-img" />
                </div>
            </section>



            <footer class="custom-bg text-light text-center py-3">
                <p class="m-0">© 2023 YearBook Canvas. All Rights Reserved.</p>
            </footer>


    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>




