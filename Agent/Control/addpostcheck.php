<?php
include "..\model\DatabaseConnection.php";


 $error="";

if (isset($_POST['add'])) {
if (empty($_POST['pname']) || empty($_POST['pdesc']) || empty($_POST['pcate'])|| empty($_POST['pprice'])|| empty($_FILES['pimage']['name'])) {
$error = "input given is invalid";
}
else
{
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
$imageLocation="../File/". $_FILES["pimage"]["name"];


$userQuery=$connection->AddProperty($conobj,"propertypost",$_POST['pname'],$_POST['pdesc'],$_POST['pcate'],$_POST["pprice"],$imageLocation);
if($userQuery==TRUE)
{
    if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $imageLocation)) {
       echo "data uploaded.";
    } else {
        echo "Sorry, data was not uploaded.";
    }
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>