<?php
// include '../connection.php';
include 'header.php';

// echo $link;
// print_r($_SESSION);
if (isset($_SESSION['user'])) {
  header('location:../index.php');
}

?>

<div class="container">

  <div class="row justify-content-center m-2">

    <div class="col-xl-5 col-md-9 col-sm-11 col-lg-7 card mt-5">
      <div class="card-body">
        
      <div class="text-center h1 text-primary" > <i class="fa fa-user-circle" aria-hidden="true"></i> </div>
        <!-- <form > -->
        
        <div class="h1 text-center text-uppercase text-primary">Login </div>
        <span id='formMsg'></span>
        <div class="form-group">

          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" name="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
          <span id='emailMsg'></span>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="Password" placeholder="Password" name="password" required>
          <span id='passMsg'></span>
        </div>

        <button id="loginuser" class="btn btn-block btn-primary">Login</button>
        <!-- </form>   -->
        <a href="registration.php" id="loginuser" class="btn btn-link">Create New User ?</a>
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