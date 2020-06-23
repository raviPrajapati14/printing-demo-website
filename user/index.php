<?php
include "header.php";
include "connection.php";
?>
<!-- validate user isLogin -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/001.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/002.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/003.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/img.jpg" alt="forth slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">About us</h3>
        <hr style="width:200px; background:orange">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <img src="images/img.jpg" alt="About Us" class="img-fluid aboutimg"> </img>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h1 class="display-4">New Dipeshwari Printing Press</h1>
                <p class="py-4">New dipeshwari Printing Press is a printing related company and we make invitation cards
                    , marriage cards, billbooks, pemphlets and etc. so please visit our site and enjoy our sservices</p>
                <p class="py-3">New dipeshwari Printing Press is a printing related company and we make invitation cards
                    , marriage cards, billbooks, pemphlets and etc. so please visit our site and enjoy our sservices</p>
                <a href="aboutus.php"><button class="btn bg-success text-white my-5 my-sm-0">Click For More!</button></a>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Services</h3>
        <hr style="width:200px; background:orange">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" style="height:400px" src="images/printing.jpg" class="img-fluid" alt="Card-image">
                    <div class="card-body">
                        <h4 class="card-title">Printing</h4>
                        <p class="card-text">All Types of Printing</p>
                        <a href="#" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" style="height:400px" src="images/design.png" class="img-fluid" alt="Card-image">
                    <div class="card-body">
                        <h4 class="card-title">Designing</h4>
                        <p class="card-text">All Types of Graphics Design</p>
                        <a href="#" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" style="height:400px" src="images/brand.png" class="img-fluid" alt="Card-image">
                    <div class="card-body">
                        <h4 class="card-title">Branding</h4>
                        <p class="card-text">All Types of Branding</p>
                        <a href="#" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Gallary</h3>
        <hr style="width:200px; background:orange">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card m-1">
                    <img src="images/g1.png" class="img-fluid" alt="kankotri" style="height:300px">
                    <div class="card-body py-2">
                        <div class="bg-warning rounded"><h6 class="p-2 card-title text-center">Wedding Invitation Card</h6></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card m-1">
                    <img src="images/g2.png" class="img-fluid" alt="kankotri" style="height:300px">
                    <div class="card-body py-2">
                        <div class="bg-warning rounded"><h6 class="p-2 card-title text-center">Invitation Card</h6></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card m-1">
                    <img src="images/bcard.jpg" class="img-fluid" alt="kankotri" style="height:300px">
                    <div class="card-body py-2">
                        <div class="bg-warning rounded"><h6 class="p-2 card-title text-center">Business Card</h6></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card m-1">
                    <img src="images/g4.png" class="img-fluid" alt="kankotri" style="height:300px">
                    <div class="card-body py-2">
                        <div class="bg-warning rounded"><h6 class="p-2 card-title text-center">Bill Book</h6></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card m-1">
                    <img src="images/g5.png" class="img-fluid" alt="kankotri" style="height:300px">
                    <div class="card-body py-2">
                        <div class="bg-warning rounded"><h6 class="p-2 card-title text-center">Pemphlet</h6></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card m-1">
                    <img src="images/g6.png" class="img-fluid" alt="kankotri" style="height:300px">
                    <div class="card-body py-2">
                        <div class="bg-warning rounded"><h6 class="p-2 card-title text-center">Latterpad</h6></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Contact Us</h3>
        <hr style="width:200px; background:orange">
    </div>

    <div class="container">
        <form action="mainpage.php" class="was-validated">
            <div class="form-group">
                <label for="uname">Username</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Email</label>
                <input type="password" class="form-control" id="email" placeholder="Enter Emain" name="email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Contact No.</label>
                <input type="password" class="form-control" id="email" placeholder="Enter Emain" name="email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Comment</label>
                <textarea name="comment" id="comment" class="form-control"></textarea>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                </label>
            </div>
            <input type="file" name="upload" id="" class="form-group form-control bg-secondary p-2 text-white"><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>

-->

<section class="my-5">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <h3 class="text-center "> GET IN TOUCH </h3>
                <hr style="width:200px; background:orange; align:left">
                <form action="index.php" method="POST" class="was-validated p-2" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="txtName" required>  
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email Id" name="txtEmail" required>  
                    </div>
                    <div class="form-group">
                        <label>Contact No.</label>
                        <input type="text" class="form-control" placeholder="Enter Contact No" name="txtContact" required>  
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" class="form-control" required></textarea>
                    </div>
                    <input type="file" name="my_file" class="form-group form-control bg-secondary p-2 text-white"><br>
                    <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
                </form>

            </div>


<!-- CONTACT US PHP SCRIPT -->
<?php

if (isset($_POST["submit1"])) {
   
    if (($_FILES['my_file']['name']!="")){
        // Where the file is going to be stored
         $target_dir = "./contact_us_files/";
         $file = $_FILES['my_file']['name'];
         $path = pathinfo($file);
         $filename = $path['filename'];
         $ext = $path['extension'];
         $temp_name = $_FILES['my_file']['tmp_name'];
         $path_filename_ext = $target_dir.$filename.".".$ext;
        // Check if file already exists
        if (file_exists($path_filename_ext)) {
            echo "<script>alert('Already Exist')</script>";
         }else{
            move_uploaded_file($temp_name,$path_filename_ext);
            echo "<script>alert('Successfully added')</script>";
         }
        }

//    echo "<script>alert('Data insert Successfully')</script>"
/*
        $getFileName = $_FILES["file"]["name"];
        $filedst = "./contact_us_files/" . $filename3 . $getFileName;
        $dst1 = "contact_us_files/" . $filename3 . $getFileName;
        move_uploaded_file($_FILES["file"]["tmp_name"], $filedst); 
*/
        mysqli_query($link, "insert into contact_us values('','$_POST[txtName]','$_POST[txtEmail]','$_POST[txtContact]','$_POST[message]','$path_filename_ext')");

}

?>



            <div class="col-lg-4 col-md-4 col-12 p-2" id="contact">
                <h3 class="text-center "> CONTACT DETAILS </h3>
                <hr style="width:200px; background:orange; align:left;">
                <div class="p-3 text-center">
                    <h5 class="p-3"> <i class="fas fa-mobile-alt"></i> Phone : </h5>
                    <p>+91 9898212001 <br> +91 9727802002 </p>
                    <h5 class="p-3"> <i class="fas fa-map-marker-alt"></i> Address : </h5>
                    <p> 18, Gomti Complex, Opp. Bus Stop, <br> Dahegam-382305, Dist. Gandhinagar </p>
                    <h5 class="p-3"> <i class="far fa-envelope"></i> Email : </h5>
                    <p>raviprajapati141297@gmail.com </p>
                    <h5 class="p-3"> <i class="fas fa-globe-africa"></i> Follow us : </h5>
                    <h4 class="p-3"> <i class="fab fa-facebook"></i> <i class="fab fa-twitter-square"></i> <i class="fab fa-google-plus"></i> <i class="fab fa-github"></i></h4>
                </div>
            </div>


        </div>
    </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5 p-5">
        <h3 class="text-center "> Our Location </h3>
        <hr style="width:200px; background:orange">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 p-2">
                <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJl6qqqrZ4XjkRDzjvBOVpPvM&key=AIzaSyD7NvcKDvupntISRDk0LDuLASxYky3rpwk" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<div class="overlay"> </div>

<?php
include "footer.php";
?>