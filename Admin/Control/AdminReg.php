<?php 
include "RegValidation.php";
//include "process.php";
$servername="localhost";
$username="root";
$password="";
$dbname="PMS";


$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("Connection Failed ". $conn->connect_error);
}
/*
$validateradio="";
$validatecheckbox="";
$Code="";
$Name=$_REQUEST["name"]; 
$Email=$_REQUEST["email"]; 
$Password=$_REQUEST["password"];
$Phone=$_REQUEST["phone"];
$Street=$_REQUEST["street"];
$City=$_REQUEST["city"];
$State=$_REQUEST["state"];
$Postal=$_REQUEST["postal"];

$Date = date('Y-m-d', strtotime($_POST['birthday']));

if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}

if(!empty($_POST['code']))///country code
 {
    $Code= $_POST['code'];
} else {
    $ValidCode="Country Code Must Required";
}



$target_File="../File/".$_FILES["fileupload"]["name"];

if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
{
    echo "You have uploadede a new file";
    echo "<br>".$_FILES(["fileupload"]["type"]);
    echo "<img src='".$target_File."'>";
}

//$Var_Street="";
$Var_City="";
$Var_State="";
$Var_Postal="";
*/
$Address=$Var_Street.','.$Var_City.','.$Var_State.','.$Var_Postal;
$Phone=$Var_Code.$Var_Phone;

if($dbValidation==true)
{
    $sql="INSERT INTO admin_reg (FullName,Email,Password,Phone,Address,DOB,Gender,File_Path) VALUES ('$Name','$email','$Password','$Phone','$Address','$Date','$validateradio','$target_File')";

if($conn->query($sql)==true)
{
    echo "New Information Saved Successfully";

}

else 
{

    echo "Error : ".$sql."<br>".$conn->error;
}

}


$conn->close();

?>