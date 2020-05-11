<?php include "header.php";
include "connection.php";

session_start();
if ($_SESSION["admin"] == "") {
?>
    <script type="text/javascript">
        window.location = "admin_login.php";
    </script>
<?php
}

?>

<div class="row p-0 d-flex container-fluid">
    <div class="col-lg-2 col-md-2 col-2 p-0 bg-dark">
        <ul class="sidebar">
            <li class="d-flex"><i class="fa fa-home text-white p-1" aria-hidden="true"></i> <a href="admin_panel.php" class="text-white">Home</a> </li>
            <li class="d-flex"><i class="fa fa-plus text-white p-1" aria-hidden="true"></i> <a href="add_product.php" name="addproduct" class="text-white">Add Product</a> </li>
            <li class="d-flex"><i class="fa fa-users text-white p-1" aria-hidden="true"></i> <a href="#viewUsers" class="text-white">Users</a> </li>
            <li class="d-flex"><i class="fa fa-eye text-white p-1" aria-hidden="true"></i> <a href="#viewProducts" class="text-white">View Products</a> </li>
        </ul>
    </div>

    <div class="col-md-10 col-lg-10 col-2">
        <!-- Users Page Start -->
        <div class="container-fluid" id="viewUsers">
            <div>
                <h3 class="pt-2 text-primary"> <i class="fa fa-users p-1" aria-hidden="true"></i> Users</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = mysqli_query($link, "select * from user_registration");
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                        <tr>
                            <td> <?php echo $row['id']; ?></td>
                            <td> <?php echo $row['fisrtname']; ?></td>
                            <td> <?php echo $row['lastname']; ?></td>
                            <td> <?php echo $row['username']; ?></td>
                            <td> <?php echo $row['password']; ?></td>
                            <td> <?php echo $row['role']; ?></td>
                            <td> <?php echo $row['status']; ?></td>
                            <td> <a href="#" class="btn btn-warning"> Edit</a> </td>
                            <td> <a href="#" class="btn btn-danger"> Delete</a> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- Users Page End -->
        <br><hr class="bg-secondary"><br>
        <!-- View Product Page Start -->
        <div class="container-fluid" id="viewProducts"> 
            <div>
                <h3 class="pt-2 text-primary"> <i class="fa fa-eye p-1" aria-hidden="true"></i> View Product</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Offer Price</th>
                        <th>Actual Price</th>
                        <th> Qty</th>
                        <th>Product image</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = mysqli_query($link, "select * from add_product");
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                        <tr>
                            <td> <?php echo $row['id']; ?></td>
                            <td> <?php echo $row['product_name']; ?></td>
                            <td> <?php echo $row['product_offer_price']; ?></td>
                            <td> <?php echo $row['product_actual_price']; ?></td>
                            <td> <?php echo $row['product_qty']; ?></td>
                            <td> <img style="width:50px;" src="../admin/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>"> </td>
                            <td> <?php echo $row['product_desc']; ?></td>
                            
                            <td> <a href="#" class="btn btn-warning"> Edit</a> </td>
                            <td> <a href="#" class="btn btn-danger"> Delete</a> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- View Product Page End -->



    </div>
</div>



<?php include "footer.php"; ?>