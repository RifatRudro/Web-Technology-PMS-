<?php
include "..\model\DatabaseConnection.php";
$Pname=$Pdesc=$Pcat=$Pprice=$Pimg=""; 
$UserType="";
$hasError=false;
$error=""; 



$Pname=$_POST["pname"];
if($Pname=="")
{
  echo "Enter Property Name to Search Any Property !!"; 
}
else 
{
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();

$userQuery=$connection->SearchProperty($conobj,"product",$Pname);
$UserType="Seller";
if ($userQuery->num_rows > 0) {
  echo "dv df vfd vfd vdafv";
    while($row = $userQuery->fetch_assoc()) {

      $Pname=$row["P_Name"];
      $Pdesc=$row["P_Desc"];
      $Pcat=$row["P_Cate"];
      $Pprice=$row["P_Price"];
      $Pimg=$row["P_image"];

       echo "Property Name: <b>".$Pname."</b><br>";
       echo "Property Description: <b>".$Pdesc."</b><br>"; 
       echo "Property Category: <b>".$Pcat."</b><br>"; 
       echo "Property Price: <b>".$Pprice."</b><br>"; 
       echo "<img src='".'../../propertyOwner/propertyOwner/'.$Pimg."'><br><br>";
     
      
  } 

}
else 
echo "Property Doesn't Found !!!<br>";
}
?>
