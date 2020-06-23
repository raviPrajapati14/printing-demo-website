<?php
session_start();
include 'connection.php';

// if(isset($_POST['submit1']))
// {
//header("location:product.php");

// echo  $_SESSION['user'];
// exit;
if (isset($_SESSION['user'])) {
  // echo "Yes";

  $qty = $_POST['qty'];
  $pid =  $_POST['id'];

  $qry = "select id from user_registration where username='" . $_SESSION['user'] . "'";
  $result = mysqli_query($link, $qry);
  // print_r($result);
  $row = mysqli_fetch_assoc($result);
  if (isset($row)) {
    // echo $row['id'];
    $uid = $row['id'];
  } else
{
  
}
  $checkQry = "select * from user_cart where userId=$uid and productId=$pid";
  $res = mysqli_query($link, $checkQry);
  // print_r($res);
  if ($res->num_rows == 1) {
    // echo "Update Qtry";
    $row = mysqli_fetch_assoc($res);
    $qty += $row['quantity'];
    $updQry = "update user_cart set quantity=$qty";
    if (mysqli_query($link, $updQry)) {
      echo "Success";
    } else {
      // echo "Error: " . $insQry . "<br>" . mysqli_error($link);
    }
  } else {
    // echo "insrt "; 

    $insQry = "insert into user_cart (userId,productId,quantity) values ($uid,$pid,$qty)";
    if (mysqli_query($link, $insQry)) {
      echo "Success";
    } else {
      // echo "Error: " . $insQry . "<br>" . mysqli_error($link);
    }
  }


  //



} else {
  echo "Not Login";
  //  echo "Plaease Login";
  //  header("location:user_login.php");
}

// }