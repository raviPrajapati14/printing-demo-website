<?php
include "header.php";
include "connection.php";

?>

<!-- Sidebar -->
<div class="container-fluid row p-0 d-flex">
    <div class="col-lg-2 col-md-2 p-0 bg-light">
        <ul class="sidebar">
            <li><a href="#">Marriage Invitation Card</a> </li>
            <li><a href="#">Invitation Card</a></li>
            <li><a href="#">Bussiness Card</a></li>
            <li><a href="#">Bill-Book</a></li>
            <li><a href="#">Voucher Book</a></li>
            <li><a href="#">Latterpad</a></li>
            <li><a href="#">Pemphlets</a></li>
            <li><a href="#">other</a></li>
        </ul>
    </div>
    <!-- Sidebar End-->

    <!-- Product list start-->
    <div class="col-md-9 col-lg-9">

        <div class="row">

            <?php
            $res = mysqli_query($link, "select * from add_product");
            while ($row = mysqli_fetch_array($res)) {
            ?>

                <div class="col-lg-4 col-md-4 col-12 mt-2">
                    <div class="card">
                        <img class="card-img-top" style="height:200px; width:auto" src="../admin/<?php echo $row["product_image"]; ?>" class="img-fluid" alt="<?php echo $row["product_name"]; ?>">
                        <div class="card-body">
                            <h4 class="card-title"> <?php echo $row["product_name"]; ?> </h4>
                            <h5> <i class="fas fa-rupee-sign"></i> <?php echo $row["product_offer_price"]; ?> <small> <del class="text-danger"> <i class="fas fa-rupee-sign"></i> <?php echo $row["product_actual_price"]; ?> </del> </small> </h5>

                            <button type="button" class="btn btn-primary"> <i class="fas fa-shopping-cart"> </i> Add to cart </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row["id"]; ?>">
                                Quick View
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="<?php echo $row["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-primary"><?php echo $row["product_name"]; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 border-right">
                                                        <img style="height:300px; width:auto;" src="../admin/<?php echo $row["product_image"]; ?>" class="img-fluid" alt="<?php echo $row["product_name"]; ?>">
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <h3 class="text-warning"> <?php echo $row["product_name"];?> </h3>
                                                    <hr>
                                                    <p> <?php echo $row["product_desc"];?> </p>
                                                    <small> <del class="text-danger"> <i class="fas fa-rupee-sign"></i> <?php echo $row["product_actual_price"]; ?> </del> </small>
                                                    <h4> <i class="fas fa-rupee-sign"></i> <?php echo $row["product_offer_price"]; ?> </h4>
                                                    <hr>
                                                    <label class="font-weight-bold"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Quntity </label>
                                                    <input class="form-control" type="number" placeholder="Add Quantity">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary"> <i class="fas fa-shopping-cart"> </i> Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php 
            }
            ?>
            <!-- Product list End-->
        </div>
    </div>
</div>

<?php include "footer.php" ?>