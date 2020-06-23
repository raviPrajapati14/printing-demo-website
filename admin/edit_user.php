<?php
include "connection.php";
session_start();

if(!isset($_SESSION["admin"]))
{   
    header("location:admin_login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Dipeshwari Printing Press</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body class="bg-dark pt-5" style="height:100vh">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">

            </div>
            <div class="col-lg-8 col-md-8 bg-light p-5 rounded">
                <div>
                    <h3 class="text-center"> EDIT USER </h3>
                </div>

                <?php


                if (isset($_GET['id']) && $_GET['id']!='') {
                   $id = $_GET['id'];
                   $res = mysqli_query($link, "select * from user_registration where id=$id");
                   
                   while ($row = mysqli_fetch_array($res))
                   {
                 ?>

                <form action="" method="post">
                    <div class="form-group">
                        <label class="text-primary"> First Name</label>
                        <input class="form-control" type="text" placeholder="Enter First Name" name="fName" value=" <?php echo $row['fisrtname']; ?> ">
                    </div>
                    <div class="form-group">
                        <label class="text-primary"> Last Name</label>
                        <input class="form-control" type="text" placeholder="Enter Last Name" name="lName" value=" <?php echo $row['lastname']; ?> ">
                    </div>
                    <div class="form-group">
                        <label class="text-primary"> Username</label>
                        <input class="form-control" type="text" placeholder="Enter Username" name="usrName" value=" <?php echo $row['username']; ?> ">
                    </div>
                    <div class="form-group">
                        <label class="text-primary"> Password</label>
                        <input class="form-control" type="Password" placeholder="Enter Password" name="password" value=" <?php echo $row['password']; ?> ">
                   </div>

                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Update" name="submit1">
                    </div>
                </form>

                    <?php
                   }
            
                }  
                
                if (isset($_POST['submit1'])){

                    $fname = $_POST['fName'];
                    $lname = $_POST['lName'];
                    $usrname = $_POST['usrName'];
                    $pass = $_POST['password'];

                    if (isset($_GET['id']) && $_GET['id']!=''){
                        $id=$_GET['id'];
                        mysqli_query($link,"update user_registration set fisrtname='$fname', lastname='$lname',username='$usrname',password='$pass' where id='$id' ");
                        header("location:admin_panel.php");
                    } 

                }

                ?>




            </div>
            <div class="col-lg-2 col-md-2">

            </div>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>