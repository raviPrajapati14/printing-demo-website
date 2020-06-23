<?php include "header.php";
include "connection.php";

session_start();

if (!isset($_SESSION["admin"])) {
    header("location:admin_login.php");
}
/*
if ($_SESSION["admin"] == "") {
?>
    <script type="text/javascript">
        window.location = "admin_login.php";
    </script>
<?php
}
*/
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = $_GET['type'];

    if ($type == 'deleteusr') {
        $id = $_GET['id'];
        $delete_sql = "delete from user_registration where id='$id'";
        echo "<script>alert('User Successfully Deleted')</script>";
        mysqli_query($link, $delete_sql);
    }

    if ($type == 'deleteproduct') {
        $id = $_GET['id'];
        $delete_sql = "delete from add_product where id='$id'";
        echo "<script>alert('Product Successfully Deleted')</script>";
        mysqli_query($link, $delete_sql);
    }

    
    if ($type == 'deletecontactus') {
        $id = $_GET['id'];
        $delete_sql = "delete from contact_us where id='$id'";
        echo "<script>alert('Product Successfully Deleted')</script>";
        mysqli_query($link, $delete_sql);
    }
}

?>

<div class="row p-0 d-flex container-fluid">
    <div class="col-lg-2 col-md-2 p-0 bg-dark">
        <ul class="sidebar">
            <li class="d-flex"><i class="fa fa-home text-white p-1" aria-hidden="true"></i> <a href="admin_panel.php" class="text-white">Home</a> </li>
            <li class="d-flex"><i class="fa fa-plus text-white p-1" aria-hidden="true"></i> <a href="add_product.php" name="addproduct" class="text-white">Add Product</a> </li>
            <li class="d-flex"><i class="fa fa-users text-white p-1" aria-hidden="true"></i> <a href="#viewUsers" class="text-white">Users</a> </li>
            <li class="d-flex"><i class="fa fa-eye text-white p-1" aria-hidden="true"></i> <a href="#viewProducts" class="text-white">View Products</a> </li>
            <li class="d-flex"><i class="fa fa-eye text-white p-1" aria-hidden="true"></i> <a href="#ContactUs" class="text-white">Contact Us</a> </li>
        </ul>
    </div>

    <div class="col-md-10 col-lg-10">
        <!-- Users Page Start -->
        <div class="container-fluid" id="viewUsers">
            <div>
                <h3 class="pt-2 text-primary"> <i class="fa fa-users p-1" aria-hidden="true"></i> Users</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr.No.</th>
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
                    $srNo = 1;
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                        <tr>
                            <td> <?php echo $srNo++; ?></td>
                            <td> <?php echo $row['id']; ?></td>
                            <td> <?php echo $row['fisrtname']; ?></td>
                            <td> <?php echo $row['lastname']; ?></td>
                            <td> <?php echo $row['username']; ?></td>
                            <td> <?php echo $row['password']; ?></td>
                            <td> <?php echo $row['role']; ?></td>
                            <td> <?php echo $row['status']; ?></td>
                            <td> <?php echo " <a href=edit_user.php?id=" . $row['id'] . " class='btn btn-warning'> Edit </a>"; ?> </td>
                            <td> <?php echo " <a href='?type=deleteusr&id=" . $row['id'] . "' class='btn btn-danger'> Delete </a>"; ?> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- Users Page End -->
        <br>
        <hr class="bg-secondary"><br>


        <!-- View Product Page Start -->
        <div class="container-fluid" id="viewProducts">
            <div>
                <h3 class="pt-2 text-primary"> <i class="fa fa-eye p-1" aria-hidden="true"></i> View Product</h3>
            </div>
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>Sr.<br>No.</th>
                        <th>Product Id</th>
                        <th>Product <br> Name</th>
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
                    $srNo = 1;
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                        <tr>
                            <td> <?php echo $srNo++; ?></td>
                            <td> <?php echo $row['id']; ?></td>
                            <td> <?php echo $row['product_name']; ?></td>
                            <td> <?php echo $row['product_offer_price']; ?></td>
                            <td> <?php echo $row['product_actual_price']; ?></td>
                            <td> <?php echo $row['product_qty']; ?></td>
                            <td> <img style="width:50px;" src="../admin/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>"> </td>
                            <td> <?php echo $row['product_desc']; ?></td>
                            <td> <?php echo " <a href=edit_product.php?id=" . $row['id'] . " class='btn btn-warning'> Edit </a>"; ?> </td>
                            <td> <?php echo " <a href='?type=deleteproduct&id=" . $row['id'] . " ' class='btn btn-danger'> Delete </a>"; ?> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- View Product Page End -->

        <br>
        <hr class="bg-secondary"><br>

        <!-- Contact us page Start -->
        <div class="container-fluid" id="ContactUs">
            <div>
                <h3 class="pt-2 text-primary"> <i class="fa fa-eye p-1" aria-hidden="true"></i> Contact Us</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>MsgID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact No.</th>
                        <th>Message</th>
                        <th>File</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = mysqli_query($link, "select * from contact_us");
                    $srNo = 1;
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                        <tr>
                            <td> <?php echo $srNo++; ?></td>
                            <td> <?php echo $row['id']; ?></td>
                            <td> <?php echo $row['name']; ?></td>
                            <td> <?php echo $row['email']; ?></td>
                            <td> <?php echo $row['contactno']; ?></td>
                            <td> <?php echo $row['massage']; ?></td>
                            <td> <?php echo $row['file']; ?></td>
                            <td> <?php echo " <a href='?type=deletecontactus&id=" . $row['id'] . " ' class='btn btn-danger'> Delete </a>"; ?> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- Contact us page End -->






    </div>
</div>



<?php include "footer.php"; ?>