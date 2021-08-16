<?php
include "..\model\databaseconnection.php";
$validateemail=$Name=$Email=$User=$User1=$Phone=$Address=$DOB=$Gender=$UserType="";
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

$userQuery=$connection->ShowData2($conobj,"customer_reg",$Email);
$UserType="Agent";
if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $Name=$row["FullName"];
      $Email=$row["Email"];
     
      $Phone=$row["Phone"];
      $Address=$row["Address"];

      if(  $row["Gender"]=="Female" )
      {
           $checked2="checked"; 
           $Gender="Female";
      }

      else if($row["Gender"]=="Male")
      {
           $checked1="checked"; 
           $Gender="Male";
    }
      else
      {
          $checked3="checked";
          $Gender="Other";
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
  $UserType="Customer";
  echo "Helloooooooooooo ".$Name;

$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
if(isset($_REQUEST["gender"]))
{
    $Gender=$_REQUEST["gender"];
}

if(  $Gender=="Female" )
{
     $checked2="checked"; 
     $Gender="Female";
}

else if($Gender=="Male")
{
     $checked1="checked"; 
     $Gender="Male";
}
else
{
    $checked3="checked";
    $Gender="Other";
}

$userQuery=$connection->UpdateCustomer($conobj,"customer_reg",  $Name,$Email,$Phone,$Address,$Gender);
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
    $userQuery=$connection->DeleteUserReq($conobj,"customer_reg",$Email);
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
