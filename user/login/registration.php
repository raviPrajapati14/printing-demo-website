<?php
// include '../connection.php';
include 'header.php';

// echo $link;
?>

<div class="container">
  

<div class="row justify-content-center m-2">
  

<div class="col-xl-5 col-md-9 col-sm-11 col-lg-7 card mt-5">
  <div class="card-body ">
    
<!-- <form > -->
<span id='formMsg'></span>
<div class="h1 text-center text-primary" >Registration </div>
  <div class="form-group">

  
  <label for="exampleInputEmail1">First Name</label>
    <input type="text"  class="form-control" id="FName" aria-describedby="emailHelp" placeholder="Enter First Name" name="Fname">
    <span id='fNameMsg'></span>
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Last Name</label>
    <input type="text"  class="form-control" id="LName" aria-describedby="emailHelp" placeholder="Enter Last Name" name="Lname" >
    <span id='lNameMsg'></span>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email"  class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter Email" name="Email" >
    <span id='emailMsg'></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="Password" placeholder="Password" name="password" required>
    <span id='passMsg'></span>
  </div>

  <button id="loginuser"  class="btn-block btn btn-primary">Register</button>
<!-- </form>   -->
<!-- </form>   -->
<a href="login.php" id="loginuser"  class="btn btn-link">Already user?</a>
  </div>
</div>
</div>
</div>
<?php

include 'footer.php';
?>
<script>
$('#loginuser').on('click',function(e){
e.preventDefault();

Email=$('#Email').val();
// console.log(Email);
Pass=$('#Password').val();
FName=$('#FName').val();
// console.log(Email);
LName=$('#LName').val();
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
  url:'validate_registration.php',
  method:'post',
  data:{Email:Email,Password:Pass,FirstName:FName,LastName:LName},
  dataType:'json',
  success:function(res)
  {
// console.log(res);
// console.log(res.Validation);
// console.log(res.EmailErro);
if(res.Validation==false)
{
  // console.log("Not Validated");
  if(res.EmailErro)
  {
    $('#emailMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>"+res.EmailErro+"</div>");
  }
  else
  {
    $('#emailMsg').html('');
  }
  if(res.PassErro)
  {
    $('#passMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>"+res.PassErro+"</div>");
  }
  else
  {
    $('#passMsg').html('');
  }
  if(res.FnameErro)
  {
    $('#fNameMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>"+res.FnameErro+"</div>");
  }
  else
  {
    $('#fNameMsg').html('');
  }
  if(res.LnameErro)
  {
    $('#lNameMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>"+res.LnameErro+"</div>");
  }
  else
  {
    $('#lNameMsg').html('');
  }
}
else{
  $('#emailMsg').html('');
  $('#passMsg').html('');
  // console.log("Validated");
  if(res.AlreadyRegistred==true)
  {
    $('#formMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>"+"Registartion Successful."+"</div>");$('#formMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>"+"Already Registred."+"</div>");
  }
  else
  {
    if(res.Success==true)
    {
    $('#formMsg').html("<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>"+"Registartion Successful."+"</div>");
    }
    else
    { 
    $('#formMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>"+res.Msg+"</div>");
    }
  }
  

}
  },
  error:function(res)
  {
console.log(res);
    $('#formMsg').html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>"+"Something Went Wrong."+"</div>");
  }

});


});

</script>

