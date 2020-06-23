<?php session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Dipeshwari Printing Press</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <div class="mainbg">
        <div class="maincontaint">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <a class="" href="index.php"> <img src="images/logo-1.png" class="w-50" alt="New Dipeshwari Ptinting Press"> </img> </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0 p-2 font-weight-bold">
                        <li class="nav-item active">
                            <a class="nav-link mr-2" href="index.php"> Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2" href="aboutus.php"> About Us </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2" href="service.php"> Services </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="product.php">Marriage Invitation Card</a>
                                <a class="dropdown-item" href="product.php">Invitation Card</a>
                                <a class="dropdown-item" href="product.php">Bussiness Card</a>
                                <a class="dropdown-item" href="product.php">Bill-Book</a>
                                <a class="dropdown-item" href="product.php">Voucher Book</a>
                                <a class="dropdown-item" href="product.php">Latterpad</a>
                                <a class="dropdown-item" href="product.php">Pemphlets</a>
                                <a class="dropdown-item" href="product.php">other</a>
                            </div>
                        </li>

                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Printing</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Offset Printing</a>
                                <a class="dropdown-item" href="#">Screen Printing</a>
                                <a class="dropdown-item" href="#">Multicolor Printing</a>
                                <a class="dropdown-item" href="#">UV Printing</a>
                                <a class="dropdown-item" href="#">T-shirt Printing</a>
                            </div>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="#contact"> Contact Us </a>
                        </li>
                        <?php
                        // print_r($_SESSION);
                        if (isset($_SESSION['user'])) {
                            echo '<li class="nav-item">
                        <a href="logout.php" class="btn btn-danger"> Logout </a>
                    </li>';
                        } else {
                            echo '<li class="nav-item mr-1">
                        <a href="Login/login.php" class="btn btn-success"> Login </a>
                    </li>';
                        }
                        ?>
                        <li class="nav-item active">
                            
<?php

if (isset($_SESSION['user'])) {


    $qry = "select id from user_registration where username='" . $_SESSION['user'] . "'";
    $result = mysqli_query($link, $qry);
    // print_r($result);
    $row = mysqli_fetch_assoc($result);
    if (isset($row)) {
      // echo $row['id'];
      $uid = $row['id'];
    }

    $qry2="select * from user_cart where userId=$uid";
    $result2=mysqli_query($link,$qry2);

    // $count=$/
    echo '<a class="nav-link mr-2 font-weight-normal" href="cart.php"> <i class="fas fa-shopping-cart text-dark"></i> Cart
    <small class="p-1 bg-danger text-white border rounded-circle"> '.$result2->num_rows.' </small> </a>';
} else {
    
}


?>

                        </li>
                    </ul>
                    <form class="form-inline ">
                        <!-- <input class="form-control" type="text" placeholder="Search"> </input>
                        <button class="btn btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i> </button> -->
                    </form>
                </div>
            </nav>
            <!--
            <div class="row bg-warning container-fluid">
                    <div class="col-lg-2 col-md-2"> </div>
                <div class="col-md-8 col-lg-8">
                    <form class="form-inline ">
                        <input class="form-control" style="width:800px;" type="text" placeholder="Search"> </input>
                        <button class="btn btn-light" type="submit"><i class="fa fa-search" aria-hidden="true"></i> </button>
                    </form>
                </div>
                <div class="col-lg-2 col-md-2"> </div>
            </div>
            -->