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

$userQuery=$connection->ShowData2($conobj,"propertypost",$Pname);
$UserType="Agent";
if ($userQuery->num_rows > 0) {

    while($row = $userQuery->fetch_assoc()) {
      $Pname=$row["P_Name"];
      $Pdesc=$row["P_Desc"];
      $Pcat=$row["P_Cate"];
      $Pprice=$row["P_Price"];
      $Pimg=$row["P_Image"];

     

       echo "Property Name: <b>".$Pname."</b><br>";
       echo "Property Description: <b>".$Pdesc."</b><br>"; 
       echo "Property Category: <b>".$Pcat."</b><br>"; 
       echo "Property Price: <b>".$Pprice."</b><br>"; 
       echo "<img src='".$Pimg."'>";
     
      
  } 

}
else 
echo "Property Doesn't Found !!!<br>";
}
?>
