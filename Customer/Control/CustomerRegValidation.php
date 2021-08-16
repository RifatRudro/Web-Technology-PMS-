<?php 
$Val_Name=$Val_Email=$Val_Pass=$Val_ConfPass= $Val_Phone= $Val_Add=$Val_Gender=$Address=$Phone="";
$error=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{


    $Name=$_REQUEST["fname"]; 
    $email=$_REQUEST["email"]; 
    $Password=$_REQUEST["password"];
    $ConfirmPassword=$_REQUEST["ConfirmPassword"];
   $Phone=$_REQUEST["phone"];
    $Address=$_REQUEST["Address"];
    

if(empty($Name))
{
$Val_Name="Name must be 4 character";
$error=true;
}
if(is_numeric($Name))
{
    $Val_Name="Must be alphabets!!";
    $error=true;
}
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $Val_Email="You Must Enter Valid Email";
    $error=true;
}

if(strlen($Password)<6)
{
    $Val_Pass="Password Must Contain 6 character";
    $error=true;
}

if(strlen($ConfirmPassword)<6)
{
    $Val_ConfPass="Confirm Password Must Contain 6 character";
    $error=true;
}

else if($Password != $ConfirmPassword)
{
    $Val_ConfPass ="Password and Confirm password Must match";
    $error=true;
}

}

if($Phone=="")
{
    //$Val_Phone="Phone can not be empty";
    $error=true;
}

if($Address=="")
{
    //$Val_Add="Address can not be empty !!";
    $error=true;
}

if(isset($_REQUEST["gender"]))
{
    //$validateradio= "Gender - ".$_REQUEST["gender"];
    
}
else{
    $validateradio="Gender Must required";
}




?>