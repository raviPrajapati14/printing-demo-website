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

<section class="my-3">
<div class="py-3">
    <h3 class="text-center">Services</h3>
    <hr style="width:200px; background:orange">
</div>
<div class="container-fluid">
    <div class="row" >
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
                <img class="card-img-top" style="height:400px" src="images/printing.jpg" class="img-fluid" alt="Card-image">
                <div class="card-body">
                    <h4 class="card-title">Printing</h4>
                    <p class="card-text">All Types of Printing</p>

                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#printingModelID">
                    Details
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="printingModelID" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title text-primary">Printing Serivice</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                   <h4 class="text-warning">  Printing Categories </h4>
                                    <ul class="text-secondary">
                                        <li>Offset Printing</li>
                                        <li>Screen Printing</li>
                                        <li>Multicolor Printing</li>
                                        <li>Emboss Printing</li>
                                        <li>UV Printing</li>
                                        <li>Etc.</li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
                <img class="card-img-top" style="height:400px" src="images/design.png" class="img-fluid" alt="Card-image">
                <div class="card-body">
                    <h4 class="card-title">Designing</h4>
                    <p class="card-text">All Types of Graphics Design</p>
                    
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#DesignModelID">
                    Details
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="DesignModelID" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title text-primary">Design Serivice</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                   <h4 class="text-warning">  Graphics Designing </h4>
                                    <ul class="text-secondary">
                                        <li>Website Design</li>
                                        <li>Advertisement Design</li>
                                        <li>Banner Design</li>
                                        <li>Logo Design</li>
                                        <li>Wedding Card Design</li>
                                        <li>Business Card Design</li>
                                        <li>Wrapper Design</li>
                                        <li>Paper Bag Design</li>
                                        <li>3D Layout Design</li>
                                        <li>Packaging Design</li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
                <img class="card-img-top" style="height:400px" src="images/brand.png" class="img-fluid" alt="Card-image">
                <div class="card-body">
                    <h4 class="card-title">Branding</h4>
                    <p class="card-text">All Types of Branding</p>
                    
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#BrandModelID">
                    Details
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="BrandModelID" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title text-primary">Branding Service</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                   <h4 class="text-warning">  Branding </h4>
                                    <ul class="text-secondary">
                                        <li>Design Brand</li>
                                        <li>Logo Brand</li>
                                        <li>Brand Design</li>
                                        <li>Brand printing</li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>