<?php
include 'connection.php';
$id=$_POST['id'];

$qry="delete from user_cart where id=$id";
if(mysqli_query($link,$qry)){
    //"<script> alert('Product Removed Successfully') </script>";
    echo "Success";
}



?>