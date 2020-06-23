<?php
// include '../connection.php';
include 'header.php';

// echo $link;
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8 card my-5 m-2">
            <div class="card-body ">
                <!-- <form > -->
                <span id='formMsg'></span>
                <div class="h1 text-center text-primary"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Checkout </div>
                <hr style="background:silver; width:300px;">
                <h5 class="text-primary"> <i class="fa fa-user-circle" aria-hidden="true"></i> Personal Details </h5>
                <hr style=" background: radial-gradient(blue, darkblue); height: 4px; border-radius: 20px;">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter First Name" name="Fname" required>
                    <span id='fNameMsg'></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter Last Name" name="Lname" required>
                    <span id='fNameMsg'></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Contact No.</label>
                    <input type="text" class="form-control" placeholder="Enter Contact Number" name="Lname" required>
                    <span id='fNameMsg'></span>
                </div>
                <br>
                <h5 class="text-primary"> <i class="fa fa-address-card" aria-hidden="true"></i> Address </h5>
                <hr style=" background: radial-gradient(blue, darkblue); height: 4px; border-radius: 20px;">
                <div class="form-group">
                    <label for="exampleInputEmail1">Street Address</label>
                    <input type="text" class="form-control" id="FName" aria-describedby="emailHelp" placeholder="Enter Street Address" name="Fname">
                    <span id='fNameMsg'></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Near Address</label>
                    <input type="text" class="form-control" id="LName" aria-describedby="emailHelp" placeholder="Enter Near Address" name="Lname">
                    <span id='lNameMsg'></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter City" name="Email">
                    <span id='emailMsg'></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Pincode</label>
                    <input type="number" class="form-control" id="Pincode" placeholder="Enter Pincode" name="password" required>
                    <span id='passMsg'></span>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <select class="form-control">
                        <option>Gujarat</option>
                    </select>
                    <span id='emailMsg'></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Country</label>
                    <select class="form-control">
                        <option>India</option>
                    </select>
                    <span id='emailMsg'></span>
                </div>
                <button id="loginuser" class="btn btn-primary">Place Order</button>
                <!-- </form>   -->

            </div>
        </div>
    
    
    
        <div class="col-3 card p-3 m-2 my-5">
        <div class="h3 text-center text-primary">
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
                    <?php echo 2; ?>
                </div>
            </div>
            <div class="row  ">
                <div class="col-6">
                    Amount Payable
                </div>
                <div class="col-5">
                    <i class='fas fa-rupee-sign'></i>
                    <?php echo 2000; ?>
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
        FName = $('#FName').val();
        // console.log(Email);
        LName = $('#LName').val();
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
            url: 'validate_registration.php',
            method: 'post',
            data: {
                Email: Email,
                Password: Pass,
                FirstName: FName,
                LastName: LName
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
                    if (res.FnameErro) {
                        $('#fNameMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>" + res.FnameErro + "</div>");
                    } else {
                        $('#fNameMsg').html('');
                    }
                    if (res.LnameErro) {
                        $('#lNameMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>" + res.LnameErro + "</div>");
                    } else {
                        $('#lNameMsg').html('');
                    }
                } else {
                    $('#emailMsg').html('');
                    $('#passMsg').html('');
                    // console.log("Validated");
                    if (res.AlreadyRegistred == true) {
                        $('#formMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>" + "Registartion Successful." + "</div>");
                        $('#formMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>" + "Already Registred." + "</div>");
                    } else {
                        if (res.Success == true) {
                            $('#formMsg').html("<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>" + "Registartion Successful." + "</div>");
                        } else {
                            $('#formMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>" + res.Msg + "</div>");
                        }
                    }


                }
            },
            error: function(res) {
                console.log(res);
                $('#formMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>" + "Something Went Wrong." + "</div>");
            }

        });


    });
</script>