<?php
     include '../connection.php';
// echo $_POST['Email'];
// echo $_POST['Password'];
$data=array();  
if(empty($_POST['FirstName']))
 {
    $data=array("Validation"=>FALSE,"FnameErro"=>"First Name is Required");
 }
 elseif(empty($_POST['LastName']))
 {
    $data=array("Validation"=>FALSE,"LnameErro"=>"Last Name is Required");
 }
elseif (empty($_POST["Email"])) {
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
    $fname=$_POST['FirstName'];
    $lname=$_POST['LastName'];

    

    $res = mysqli_query($link, "select * from user_registration where username='$username'");
    
    if (mysqli_fetch_assoc($res)){
        $data=array("Validation"=>TRUE,"AlreadyRegistred"=>TRUE,"Success"=>FALSE);
    }
    else{
        $query = "insert into user_registration VALUES ('','$fname','$lname','$username','$password','user','active')";
    // mysqli_query($link,$query);
    if (mysqli_query($link, $query)) {
        // echo "New record created successfully";
        $data=array("Validation"=>TRUE,"Success"=>TRUE,"AlreadyRegistred"=>FALSE);
      } else {
        // echo "Error: <br>" . mysqli_error($link);
        $data=array("Validation"=>TRUE,"Success"=>FALSE,"AlreadyRegistred"=>FALSE,"Msg"=>"Error: <br>".$query."".mysqli_error($link));
      }
        // $data=array("Validation"=>TRUE,"ValidUser"=>FALSE);
    }
 }

  
// print_r($data);
 
echo json_encode($data);