<?php 
session_start();
include "../model/DatabaseConnection.php";
if(isset($_POST['submit']))
{

    $Subject=$_POST['sub'];
    $Message=$_POST['msg'];

$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ContactAgent($conobj,"C_SMS",$_SESSION["Email"],$Subject,$Message);


}

?>