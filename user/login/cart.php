<?php
// include '../connection.php';
include 'header.php';

// echo $link;
// // print_r($_SESSION);
// if(!isset($_SESSION['user']))
// {
// //   header('location:../index.php');
// }

if (isset($_SESSION['user'])) {
  $qry = "select id from user_registration where username='" . $_SESSION['user'] . "'";
  $result = mysqli_query($link, $qry);
  //print_r($result);
  $row = mysqli_fetch_assoc($result);
  if (isset($row)) {
    //echo $row['id'];} else
  }
  // echo ":No";
  $uid = $row['id'];

  $proId = array();
  $proQty = array();
  $userCartId = array();
  $index = 0;
  $result = mysqli_query($link, "select * from user_cart where userId=$uid");

?>
  <style>
    .pass-icon {
      position: absolute;
      top: 0.40rem;
      right: 20px;
      font-size: 20px;
      /* pointer-events: none; */
      cursor: pointer;
    }

    .border {
      /* border:0px solid red!important; */
    }
  </style>

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="m-2 col-xl-7 card p-3">
        <div class="h3 text-center">
          My Cart

        </div>
        <hr style=" background: radial-gradient(blue, darkblue); height: 4px; border-radius: 20px;">
        <!-- <div class="m-2" style="width: 90%; background: radial-gradient(blue, darkblue); height: 4px; border-radius: 20px;"></div> -->
        <?php
        // print_r($result);
        $cartPrice = 0;
        $cartCount = $result->num_rows;
        if ($cartCount == 0) {
          echo '<div class=" p-5 row justify-content-center"><i class=" fas fa-shopping-bag" style="font-size: 300px;color: #3F51B5;"></i></div>';
          echo '<div class="row justify-content-center p-2 h3">Your Cart is Empty</div>';
        } else {
          while ($row2 = mysqli_fetch_assoc($result)) {
            $proId[$index] = $row2['productId'];
            $proQty[$index] = $row2['quantity'];
            $userCartId[$index] = $row2['id'];


            $getProduct = "select * from add_Product where id=" . $proId[$index] . "";
            $productFetch = mysqli_query($link, $getProduct);
            if ($row = mysqli_fetch_assoc($productFetch)) {
              $cartPrice += $row['product_offer_price'];
              // print_r($row);
        ?>

              <div class="row justify-content-center  border m-2 p-2" id="<?php echo $userCartId[$index]; ?>">


                <div class="col-3 ">

                  <img src="../../admin/<?php echo $row["product_image"]; ?>" alt="images" height="200px" width="200px" class="img-fluid ">
                </div>
                <div class="col-6 ">
                  <div>
                    <?php echo $row['product_name']; ?>
                  </div>
                  <small>
                    <?php echo $row['product_desc']; ?>
                  </small>
                  <br>
                  <small><s>Actual Price : <?php echo $row['product_actual_price']; ?> </s></small>
                  <div class="pt-2">Price per 100 ps : <?php echo $row['product_offer_price']; ?> </div>
                </div>
                <div class="col-3 " style="position:relative;">
                  <span class="pass-icon remove" data-target="" data-id="<?php echo $userCartId[$index]; ?>"><i class="fas fa-times"></i></span>
                  <!--  -->
                  <div>
                    <label for="">Quantity</label>
                    <input type="number" name="qty" value="<?php echo $proQty[$index]; ?>" id="" class="form-control ml-auto">

                  </div>
                </div>
              </div>
      <?php

            }


            $index++;
          }
        }
      }




      ?>
      <!-- <i class="fas fa-shopping-bag    "></i>
<i class="fas fa-shopping-basket    "></i> -->




      </div>

      <div class="m-2 col-xl-3 card p-3">
        <div class="h3 text-center">
          Cart Details
        </div>
        <hr style=" background: radial-gradient(blue, darkblue); height: 4px; border-radius: 20px;">
        <!-- <div class="mb-2  " style="width: 90%;    background: radial-gradient(#3F51B5, #0b154c);    height: 4px;    border-radius: 20px;"></div> -->
        <div class="border p-3">

          <div class="row">
            <div class="col-6">
              Items
            </div>
            <div class="col-5">
              <?php echo $cartCount; ?>
            </div>
          </div>
          <div class="row  ">
            <div class="col-6">
              Amount Payable
            </div>
            <div class="col-5">
              <i class='fas fa-rupee-sign'></i>
              <?php echo $cartPrice; ?>
            </div>
          </div>

          <div class="row">
            <button class="d-block m-2 bg-primary text-white btn btn-block">Checkout</button>


          </div>
        </div>
      </div>
    </div>

  </div>
  <?php

  include 'footer.php';
  ?>
  <script>
    $('#loginuser').on('click', function(e) {
      e.preventDefault();

      Email = $('#Email').val();
      // console.log(Email);
      Pass = $('#Password').val();
      // console.log(Pass);
      // if(Email=='')

      // {
      //     console.log("Please Enter Email");
      // }
      // if(Pass=='')
      // {
      //     console.log("Please Enter Password")
      // }

      $.ajax({
        url: 'validate_login.php',
        method: 'post',
        data: {
          Email: Email,
          Password: Pass
        },
        dataType: 'json',
        success: function(res) {
          // console.log(res);
          // console.log(res.Validation);
          // console.log(res.EmailErro);
          if (res.Validation == false) {
            // console.log("Not Validated");
            if (res.EmailErro) {
              $('#emailMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>" + res.EmailErro + "</div>");
            } else {
              $('#emailMsg').html('');
            }
            if (res.PassErro) {
              $('#passMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>" + res.PassErro + "</div>");
            } else {
              $('#passMsg').html('');
            }
          } else {
            $('#emailMsg').html('');
            $('#passMsg').html('');
            // console.log("Validated");
            if (res.ValidUser == false) {
              $('#formMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>" + "Invalid User" + "</div>");
            } else {
              $('#formMsg').html("<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>" + "Valid User" + "</div>");
              location.href = "../index.php";
            }
          }
        },
        error: function(res) {
          $('#formMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>" + "Something Went Wrong." + "</div>");
        }

      });
    });
  </script>



  <!-- Remove Cart Start -->
  <script>
    $('.remove').on('click', function() {
      console.log("Clicked");

      console.log($(this).attr('data-id'));
      id = $(this).attr('data-id');
      $.ajax({
        url: '../remove_product.php',
        type: 'post',
        data: {
          id: id
        },
        success: function(response) {
          console.log(response);
          if (response == "Success") {
            alert("Removed Successfully");
            // location.reload();
          }
          console.log($('#' + id + ''));
          $('#' + id + '').remove();
        },
        error: function(response) {
          console.log(response);
        },
      })

    });
    $('.pass-icon').on('click', function() {
      console.log("Clicked");
      // $id=$(this).attr('data-target');
      // $icon=$(this).find('i');
      // $icon.toggleClass('fa-eye-slash');
      // if($('#'+$id).attr('type')=="password")
      //     $('#'+$id).attr('type',"text");
      // else
      //     $('#'+$id).attr('type',"password"); 
    });
  </script>
  <!-- Remove Cart End -->