<?php
session_start();
     include '../connection.php';
// echo $_POST['Email'];
// echo $_POST['Password'];
$data=array();  
if (empty($_POST["Email"])) {
    $emailErr = "Email is required";
    $data=array("Validation"=>FALSE
        ,"EmailErro"=>$emailErr);      
  } elseif (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $data=array("Validation"=>FALSE,"EmailErro"=>$emailErr);      
}//   echo $emailErr;
else if(empty($_POST['Password']))
{
    $data=array("Validation"=>FALSE,"PassErro"=>"Password is Required");
}
elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$_POST['Password'])) {
        $data=array("Validation"=>FALSE,"PassErro"=>"the password does not meet the requirements!");
 }
 else{
    $data=array("Validation"=>TRUE);
    
    $username=$_POST['Email'];
    $password=$_POST['Password'];
    $res = mysqli_query($link, "select * from user_registration where username='$username' and password='$password'");
    
    if (mysqli_fetch_assoc($res)) {
        //Setting Session
        $_SESSION["user"] = $username;
        $data=array("Validation"=>TRUE,"ValidUser"=>TRUE);
    }
    else{
        $data=array("Validation"=>TRUE,"ValidUser"=>FALSE);
    }



 }

  
// print_r($data);
 
echo json_encode($data);