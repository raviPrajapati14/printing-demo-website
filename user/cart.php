<?php
include "header.php";
include 'connection.php';

if (isset($_SESSION['user'])) {

    $qry = "select id from user_registration where username='" . $_SESSION['user'] . "'";
    $result = mysqli_query($link, $qry);
    //print_r($result);
    $row = mysqli_fetch_assoc($result);
    if (isset($row)) {
        //echo $row['id'];
    } else
        echo ":No";
    $uid = $row['id'];

    $proId = array();
    $proQty = array();
    $userCartId=array();
    $index = 0;
    $result = mysqli_query($link, "select * from user_cart where userId=$uid");
    while ($row = mysqli_fetch_assoc($result)) {
        $proId[$index] = $row['productId'];
        $proQty[$index] = $row['quantity'];
        $userCartId[$index]=$row['id'];
        $index++;
    }

    $count = 0;
?>
    <div class="container-fluid">
        <div class="row m-2">
            <div class="col-lg-7 col-md-7 col-12">
                <h5 class="text-primary py-2">My Cart</h5>
                <hr>
                <?php
                while ($count < $index) {
                    $currentProId = $proId[$count];

                    $getProduct = "select * from add_Product where id=$currentProId";
                    $productFetch = mysqli_query($link, $getProduct);
                    if ($row = mysqli_fetch_assoc($productFetch)) {
                        // //$row=mysqli_fetch_assoc($productFetch);
                        // echo $row['id']."<br>";
                        // echo $row['product_name']."<br>";

                ?>


                        <div class="border rounded py-2 bg-light" id="<?php echo $userCartId[$count]; ?>">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-3 pl-0">
                                    <img src="../admin/<?php echo $row["product_image"]; ?>" alt="images" class="img-fluid pl-4">
                                </div>
                                <div class="col-lg-6 col-md-6 col-6">
                                    <h5 class="pt-2"> <?php echo $row['product_name']; ?> </h5>
                                    <small><?php echo $row['product_desc']; ?></small><br>
                                    <small><s>Actual Price : <?php echo $row['product_actual_price']; ?> </s></small>
                                    <h5 class="pt-2">Price per 100 ps : <?php echo $row['product_offer_price']; ?> </h5>
                                    <!-- <a href="" class="btn btn-warning">Save for later</a> -->
                                    <button id='remove<?php echo $count; ?>' data-id="<?php echo $userCartId[$count]; ?>" class="remove btn btn-danger mx-2">Remove</button>
                                </div>
                                <div class="col-lg-3 col-md-3 col-3 py-5">
                                    <div>
                                        <label for="">Quantity</label>
                                        <input type="number"  name="qty" value="<?php echo $proQty[$count]; ?>" id="" class="form-control ml-auto">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

            <?php
                    }
                    $count++;
                }
            } else {
                //header("location:user_login.php");
            }

            ?>
            </div>


            <div class="col-lg-5 col-md-5 col-12">
                <div class="py-3 ">
                    <h5 class="text-primary">Price Details</h5>
                    <hr>
                    <div class="row border rounded bg-white h-25 p-2">
                        <div class="col-lg-6 col-md-6 col-6">
                            <h6>Cart Items </h6>
                            <hr>
                            <h6>Delivery Charges </h6>
                            <hr>
                            <h5>Amount Payable</h5>

                            <button class="btn btn-success mt-2"> Checkout</button>
                        </div>

                        <div class="col-lg-6 col-md-6 col-6">
                            <h6> <?php echo $index; ?> </h6>
                            <hr>
                            <h6 class="text-sucess"> 50/- </h6>
                            <hr>
                            <h5> <i class="fas fa-rupee-sign"></i> </h5>

                        </div>
                    </div>

                </div>


            </div>


        </div>
    </div>
    </div>


    <?php
    include "footer.php";
    ?>

    <script>
    $('.remove').on('click',function(){
    // console.log("Clicked");
    
    console.log($(this).attr('data-id'));
    id=$(this).attr('data-id');
    $.ajax({
            url:'remove_product.php',
            type:'post',
            data:{id:id},
            success:function(response)
            {
                console.log(response);
                if(response=="Success")
                {
                    alert("Removed Successfully");
                    // location.reload();
                }
                console.log($('#'+id+''));
                $('#'+id+'').remove();
            },
            error:function(response)
            {
                console.log(response);
            },
        })

    });
    
    </script>


