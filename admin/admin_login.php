<?php
session_start();
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

<body class="login_container bg-dark pt-5" style="height:100vh">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-0">

                </div>
                <div class="col-lg-4 col-md-4 col-4">
                    <div class="form-group">
                        <form action="" method="POST">
                            <div class="p-2">
                                <span class="d-flex icon_design"><i class="fa fa-user pr-3 pt-2 h5" aria-hidden="true"></i> <input type="text" class="form-control" name="username" placeholder="Enter User Name"> </span>
                            </div>
                            <div class="p-2">
                                <span class="d-flex icon_design"><i class="fa fa-lock pr-3 pt-2 h5" aria-hidden="true"></i> <input type="password" class="form-control" name="password" placeholder="Enter Password"> </span>
                            </div>
                            <hr class="bg-white">
                            <div class="p-2">
                                <input type="submit" class="btn btn-success" name="submit1" value="login"/>
                                <input type="reset" class="btn btn-danger ml-5" name="reset" value="Reset"/>
                            </div>
                        </form>
                    </div>

                    <?php
                    if (isset($_POST["submit1"])) {

                        $username = $_POST["username"];
                        $password = $_POST["password"];

                        $res = mysqli_query($link, "select * from user_registration where username='$username' and password='$password' and role='admin'");
                        //$res = mysqli_query($link, "select * from user_registration");
                        print_r($res);

                        if (mysqli_fetch_assoc($res)) {
                            $_SESSION["admin"] = $username;
                            header("location:admin_panel.php");
                        } else {
                            header("location:admin_login.php");
                        }
                    }
                    ?>

                </div>
                <div class="col-lg-4 col-md-0 col-0">

                </div>
            </div>
        </div>
    </div>

    <?php

    include "footer.php";

    ?>