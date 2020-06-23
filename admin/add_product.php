<?php 
include "header.php";
include "connection.php";
session_start();

if(!isset($_SESSION["admin"]))
{   
    header("location:admin_login.php");
}
/*
session_start();

if ($_SESSION["admin"] == "") {
?>
    <script type="text/javascript">
        window.location = "admin_login.php";
    </script>
<?php
}
*/
?>

<div class="main-container container-fluid row p-0 d-flex">
    <div class="col-lg-2 col-md-2 col-2 p-0 bg-dark">
                    <ul class="sidebar">
                    <li class="d-flex"><i class="fa fa-home text-white p-1" aria-hidden="true"></i> <a href="admin_panel.php" class="text-white">Home</a> </li>
            <li class="d-flex"><i class="fa fa-plus text-white p-1" aria-hidden="true"></i> <a href="add_product.php" name="addproduct" class="text-white">Add Product</a> </li>
            <li class="d-flex"><i class="fa fa-users text-white p-1" aria-hidden="true"></i> <a href="admin_panel.php" class="text-white">Users</a> </li>
            <li class="d-flex"><i class="fa fa-eye text-white p-1" aria-hidden="true"></i> <a href="admin_panel.php" class="text-white">View Products</a> </li>
                    </ul>
    </div>

    <div class="col-md-10 col-lg-10 col-2">
        <div class="container-fluid ml-0 border rounded" style="width:800px;">
                <div class="p-2 text-primary"> <h3> <i class="fa fa-plus" aria-hidden="true"></i> Add Product</h3></div>
                <hr>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="h6"> Product Name</label>
                    <input type="text" name="productname" class="form-control" placeholder="Enter Product Name">
                </div>
                <div class="form-group">
                    <label class="h6">Product Offer Price</label>
                    <input type="text" name="productofferprice" class="form-control" placeholder="Enter Product Offer Price">
                </div>
                <div class="form-group">
                    <label class="h6">Product Actual Price</label>
                    <input type="text" name="productactualprice" class="form-control" placeholder="Enter Product ActualPrice">
                </div>
                <div class="form-group">
                    <label class="h6">Product Quantity</label>
                    <input type="text" name="productqty" class="form-control" placeholder="Enter Product Quantity">
                </div>
                <div class="form-group">
                    <label class="h6">Product Image</label>
                    <input type="file" name="productimage" class="form-control">
                </div>
                <div class="form-group">
                    <label class="h6">Product Description</label>
                    <textarea name="productdesc" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit1" class="btn btn-success" value="Upload"> Upload </button>
                </div>
            </form>

                    <?php

                    $v1=rand(1111,9999);
                    $v2=rand(1111,9999);

                    $v3=$v1.$v2;
                    $v3=md5($v3);

                    if(isset($_POST["submit1"]))
                    {
                        $getImageName=$_FILES["productimage"]["name"];
                        $imgdst="./product_image/".$v3.$getImageName ;
                        $dst1="product_image/".$v3.$getImageName ;
                        move_uploaded_file($_FILES["productimage"]["tmp_name"],$imgdst);

                        mysqli_query($link,"insert into add_product values('','$_POST[productname]','$_POST[productofferprice]','$_POST[productactualprice]','$_POST[productqty]','$dst1','$_POST[productdesc]',100)");
                    }

                    ?>

        </div>
    </div>
</div>

<?php // include "footer.php"; ?>