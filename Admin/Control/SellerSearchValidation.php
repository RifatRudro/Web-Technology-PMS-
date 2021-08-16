<?php
include "..\model\databaseconnection.php";
$validateemail=$Name=$Email=$User=$User1=$Phone=$Address=$DOB=$Gender=$UserType= $File="";
$hasError=false;
$UserFound=$checked1=$checked2=$checked3="";
if (isset($_POST['Search'])) 
{

$Email=$_REQUEST["Email"];
echo "Hello Hello ".$Email;

if(empty($Email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$Email))
{
    $validateemail="You Must Enter Valid Email";
    $hasError=true;
}

if($hasError==false)
{
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowData2($conobj,"owner",$Email);
$UserType="Seller";
if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $Name=$row["name"];
      $Email=$row["email"];
     $User=$row["username"];
      $Phone=$row["phone"];
      $Address=$row["address"];
      $File=$row["photo"];

      if(  $row["gender"]=="female" )
      {
           $checked2="checked"; 
           $Gender="female";
      }

      else if($row["gender"]=="male")
      {
           $checked1="checked"; 
           $Gender="male";
    }
      else
      {
          $checked3="checked";
          $Gender="other";
      }
   
  } 
$UserFound="User Found !!!";
/*
echo "Name : <b>".$Name."</b><br>";
echo "Email : <b>".$Email."</b><br>";
echo "User Name : <b>".$User."</b><br>";
echo "Gender : <b>".$Gender."</b><br>";
echo "Phone : <b>".$Phone."</b><br>";
echo "Address : <b>".$Address."</b><br>";
echo "Joining Date : <b>".$DOB."</b><br>";
echo "User Type : <b>".$UserType."</b><br>";
*/
}
else {
echo "User Doesn't Found !!!<br>";
$UserFound="User Doesn't Found !!!";

}

}

}

if (isset($_POST['Update'])) 
{
  $Gender="";
  $Name=$_REQUEST['Name'];
  $Email=$_REQUEST['Email'];
  $Phone=$_REQUEST['Phone'];
  $Address=$_REQUEST['Address'];
  $UserType="Seller";
  $User=$_REQUEST["username"];

$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
if(isset($_REQUEST["gender"]))
{
    $Gender=$_REQUEST["gender"];
}

if(  $Gender=="female" )
{
     $checked2="checked"; 
     $Gender="female";
}

else if($Gender=="male")
{
     $checked1="checked"; 
     $Gender="male";
}
else
{
    $checked3="checked";
    $Gender="other";
}

$userQuery=$connection->UpdateSeller($conobj,"owner",  $Name,$Email,$Phone,$Address,$Gender,$User);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
    
}
$connection->CloseCon($conobj);

}





if (isset($_POST['Delete'])) 
{
    $Email=$_REQUEST['Email'];
    $connection = new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->DeleteUserReq($conobj,"owner",$Email);
if($userQuery==TRUE)
{
    echo "Delete successful"; 
}
else
{
    echo "could not Delete";    
    
}
$connection->CloseCon($conobj);

}

?>
