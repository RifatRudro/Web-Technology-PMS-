<?php
$Name="";
$ValidName="";
$email="";
$validatepassword="";
$validateconfirmpassword="";
$validatecomment="";
$validateradio="";
$validatecheckbox="";
$v1=$v2=$v3="";
$validateemail="";
$Password="";
$validFile="";
$ValidStreet="";
$ValidCity="";
$ValidPostal="";
$ValidCode="";
$ValidPhone="";
$Date="";
$Username="";
$ValidUser="";

$_Name="";
$_Username="";
$_Email="";
$_Password="";
$_Code="";
$_Phone="";
$_Street="";
$_City="";
$_Postal="";
$_Birthdate="";
$_Gender="";
$_File="";
$Error=false;
///

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Name=$_REQUEST["name"]; 
$email=$_REQUEST["email"]; 
$Password=$_REQUEST["password"];
$ConfirmPassword=$_REQUEST["confirmpassword"];
$Phone=$_REQUEST["phone"];
$Street=$_REQUEST["street"];
$City=$_REQUEST["city"];
$Username=$_REQUEST["Username"];

$Postal=$_REQUEST["postal"];
$Date = date('Y-m-d', strtotime($_POST['birthday']));


if(empty($Name) || strlen($Name)<4)
{
    $ValidName="Name Must contain 4 letter !!";
    $Error=true;
}

else 
     $_Name=$Name;


     if(empty($Username) || strlen($Username)<6)
     {
         $ValidUser="Name Must contain 6 letter !!";
         $Error=true;
     }
     
     else 
          $_Username=$Username;
     
     
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="You Must Enter Valid Email";
    $Error=true;
}
else{
    $_Email=$email;
}

$p=0;
if(strlen($Password)<8 || empty($Password))
{
    $validatepassword=" Password Must Contain 8 character!!";
    $Error=true;
}

else{
    $_Password=$Password;
    $p=1;
}

if(empty($ConfirmPassword))
{
    $validateconfirmpassword="Confirm Password Cannot be empty !!!";
    $Error=true;
}

else if($ConfirmPassword != $Password)
{
    $validateconfirmpassword="Password and Confirm Password must match!!";
    $Error=true;
}



if(empty($Phone))
{
    $ValidPhone="Phone Must Required !!";
    $Error=true;
}


else if(!is_numeric($Phone ))
{
    $Error=true;
    $ValidPhone="Phone must be numeric number ";

}
else 
{
    $_Phone=$Phone;
}

if(empty($Street))
{
    $ValidStreet="Street information can not be empty !!";
    $Error=true;
}
else 
$_Street=$Street;


if(empty($City))
{
    $ValidCity="City information can not be empty!";
    $Error=true;
}
else 
$_City=$City;


if(empty($Postal))
{
    $ValidPostal="Postal Code must be filled!!";
    $Error=true;

}
else if(strlen($Postal)>4)
{
    $ValidPostal="Postal must contain 4 characters ";
    $Error=true;

}
else 
$_Postal=$Postal;


if(isset($_REQUEST["gender"]))
{
    #$validateradio= "Gender - ".$_REQUEST["gender"];
}
else{
    $validateradio= " Please Select Your Gender";
    $Error=true;
}


if(!isset($_REQUEST["PA"])&&!isset($_REQUEST["RA"])&&!isset($_REQUEST["AA"]))
{
    $validatecheckbox = "Please Select at Least One Checkbox";
    $Error=true;
    
}


$target_File="../File/".$_FILES["fileupload"]["name"];
if($target_File=="../File/")
    {
    $target_File="../File/default_pic.png";
    }
if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
{
    echo "You have uploadede a new file";
}
else 
    $validFile= "Sorry ,You must upload a file to continue";
} 
 ?>
