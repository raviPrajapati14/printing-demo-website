<?php
//is login
if(isset($_SESSION['admin']))
{
    // if()
    //role == user
    //User .index.php /Dashboard
    header('location:admin_panel.php');
    //role==admin
    //
}
else{
    //admin login page 
    header('location:admin_login.php');
}
?>