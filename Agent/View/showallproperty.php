<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/design1.css">
</head>
<body style="background-image: url('background2.jpg');">
<div class = "header sticky">
<h1><u> All Property Add </u></h1>
</div>
<div class= "topnav">
<h3><a href="Agent.php">Back</a></h3>

</div>

<fieldset>
  <legend>Available Property </legend>
  
<?php
include "..\model\DatabaseConnection.php";
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();

$SearchProperty=$connection->ShowAll($conobj,"propertypost");

if ($SearchProperty->num_rows > 0) 
{

    // output data of each row
    while($row = $SearchProperty->fetch_assoc()) 
    {

      echo "Property Id : ".$row["P_ID"]."<br>";
      echo "Property Name : ".$row["P_Name"]."<br>";
      echo "Property Description : ".$row["P_Desc"]."<br>";
      echo "Propety Category : ".$row["P_Cate"]."<br>";
      echo "Property price : ".$row["P_Price"]."<br>";
      echo "<img src='".$row['P_Image']."'width:20%; height:10%;><br><br>";

    }
}

?>

</fieldset>

<div class= "footer">
    <h1>Thanks To Be Part Of Our Family <h1> 
</div>

</body>
</html>
