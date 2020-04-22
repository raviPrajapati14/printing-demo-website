<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
<a class="navbar-brand" href="mainpage.php"> <img src="images/logo-1.png" class="w-50" alt="New Dipeshwari Ptinting Press"> </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 p-2 font-weight-bold">
            <li class="nav-item active">
                <a class="nav-link" href="mainpage.php"> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php"> About Us </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="service.php"> Services </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Marriage Invitation Card</a>
                    <a class="dropdown-item" href="#">Invitation Card</a>
                    <a class="dropdown-item" href="#">Bussiness Card</a>
                    <a class="dropdown-item" href="#">Bill-Book</a>
                    <a class="dropdown-item" href="#">Voucher Book</a>
                    <a class="dropdown-item" href="#">Latterpad</a>
                    <a class="dropdown-item" href="#">Pemphlets</a>
                    <a class="dropdown-item" href="#">other</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Printing</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Offset Printing</a>
                    <a class="dropdown-item" href="#">Screen Printing</a>
                    <a class="dropdown-item" href="#">Multicolor Printing</a>
                    <a class="dropdown-item" href="#">UV Printing</a>
                    <a class="dropdown-item" href="#">T-shirt Printing</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""> Contact Us </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<section class="my-5">
<div class="py-5">
    <h3 class="text-center">About us</h3>
    <hr style="width:200px; background:orange">
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/img.jpg" alt="About Us" class="img-fluid aboutimg"> </img>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h1 class="display-4">New Dipeshwari Printing Press</h1>
            <p class="py-4">New dipeshwari Printing Press is a printing related company and we make invitation cards
            , marriage cards, billbooks, pemphlets and etc. so please visit our site and enjoy our sservices</p>
            <p class="py-3">New dipeshwari Printing Press is a printing related company and we make invitation cards
            , marriage cards, billbooks, pemphlets and etc. so please visit our site and enjoy our sservices</p>
            <a href="aboutus.php"><button class="btn bg-success text-white my-5 my-sm-0" >Click For More!</button></a>
        </div>
    </div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>