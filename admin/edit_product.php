<?php
include "header.php";
include "connection.php";
session_start();

if(!isset($_SESSION["admin"]))
{   
    header("location:admin_login.php");
}
?>

<div class="container-fluid ml-0 border rounded" style="width:800px;">
    <div class="p-2 text-primary">
        <h3> <i class="fa fa-plus" aria-hidden="true"></i> Edit Product</h3>
    </div>
    <hr>

<?php 
if (isset($_GET['id']) && $_GET['id']!='') {
    $id = $_GET['id'];
    $res = mysqli_query($link, "select * from add_product where id=$id");
    
    while ($row = mysqli_fetch_array($res))
    {
?>

  <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="h6"> Product Name</label>
            <input type="text" name="productname" class="form-control" placeholder="Enter Product Name" value="<?php echo $row['product_name']; ?>">
        </div>
        <div class="form-group">
            <label class="h6">Product Offer Price</label>
            <input type="text" name="productofferprice" class="form-control" placeholder="Enter Product Offer Price" value="<?php echo $row['product_offer_price']; ?>">
        </div>
        <div class="form-group">
            <label class="h6">Product Actual Price</label>
            <input type="text" name="productactualprice" class="form-control" placeholder="Enter Product ActualPrice" value="<?php echo $row['product_actual_price']; ?>">
        </div>
        <div class="form-group">
            <label class="h6">Product Quantity</label>
            <input type="text" name="productqty" class="form-control" placeholder="Enter Product Quantity" value="<?php echo $row['product_qty']; ?>">
        </div>
        <div class="form-group">
            <label class="h6">Product Description</label>
            <textarea name="productdesc" class="form-control" > <?php echo $row['product_desc']; ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="submit1" class="btn btn-success" value="Upload"> UPDATE </button>
        </div>
    </form>

<?php
    }
}

if (isset($_POST['submit1'])){

    $pname = $_POST['productname'];
    $poprice= $_POST['productofferprice'];
    $paprice = $_POST['productactualprice'];
    $pqty = $_POST['productqty'];
    $pdesc=$_POST['productdesc'];

    if (isset($_GET['id']) && $_GET['id']!=''){
        $id=$_GET['id'];
        mysqli_query($link,"update add_product set product_name='$pname',
                                                    product_offer_price='$poprice',
                                                    product_actual_price='$paprice',
                                                    product_qty='$pqty',
                                                    product_desc='$pdesc' where id='$id' ");
        header("location:admin_panel.php");
    } 

}




?>

</div>

<?php // include "footer.php"; ?>