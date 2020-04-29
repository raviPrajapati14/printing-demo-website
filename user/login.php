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
<body>
<div class="container-fluid">
    <div id="loginbox">
        <form action="index.html" method="post" class="form-vertical p-3">
            <div class="control-group normal-text p-3"> <h3>Login Page</h3> </div>
                <div class="control-group p-2">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add_on bg_lg"> <i class="fa fa-user" aria-hidden="true"></i> </span> <input type="text" placeholder="UserName">
                        </div>
                    </div>
                </div>
                <div class="control-group p-2">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add_on bg_lg"> <i class="fas fa-user-lock    "></i> </span> <input type="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="form-actions">
            <span class="pull-left"><a type="submit" href="index.html" class="btn btn-success"/>Login</a></span>
            <span class="pull-right"><a href="#" class="flip-link btn btn-info" id="to-recover">Create Account?</a></span>

        </div>
        </form>
    </div>
</div>
<?php include "footer.php"; ?>
