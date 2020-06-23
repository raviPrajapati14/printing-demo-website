<?php
include "connection.php";

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
                    <h3 class="text-center"> Create New User</h3>
                </div>
                <form action="" method="post">
                    <div class="form-group">
                        <label class="text-primary"> First Name</label>
                        <input class="form-control" type="text" placeholder="Enter First Name" name="fName" required>
                    </div>
                    <div class="form-group">
                        <label class="text-primary"> Last Name</label>
                        <input class="form-control" type="text" placeholder="Enter Last Name" name="lName" required>
                    </div>
                    <div class="form-group">
                        <label class="text-primary"> Username</label>
                        <input class="form-control" type="text" placeholder="Enter Username" name="usrName" required>
                    </div>
                    <div class="form-group">
                        <label class="text-primary"> Password</label>
                        <input class="form-control" type="Password" placeholder="Enter Password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label class="text-primary"> Role</label>
                        <select name="role" class="form-control" > 
                            <option value="User"> USER </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-primary"> Status</label>
                        <select name="status" class="form-control"> 
                            <option value="active"> Active </option>
                            <option value="deactive"> DeActive </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Submit" name="submit1">
                        <input class="btn btn-danger" type="reset" value="Reset">
                    </div>
                </form>

                <div class="link">
                    <a href="user_login.php"> <p class="text-center"> Already User? </p></a>
                </div>

                <?php

                if (isset($_POST["submit1"])) {
                   
                    //$usrname =$_POST['usrName'];
                    //$res=mysqli_query($link,"select * from user_registration");

                    $query = "insert into user_registration VALUES ('','$_POST[fName]','$_POST[lName]','$_POST[usrName]','$_POST[password]','$_POST[role]','$_POST[status]')";
                    mysqli_query($link,$query);

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