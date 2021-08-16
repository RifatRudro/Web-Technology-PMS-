<?php
//include('../model/DatabaseConnection.php');
//include "RegValidation.php";

$validateradio=$ValidName=$validateemail=$ValidPhone=$ValidAddress="";
 
$Var_Name=$Var_Email=$Var_Password=$Var_Phone=$Var_Gender="";

 $error=$Name=$Email=$Phone=$Address=$Gender="";
 $hasError=false;

if (isset($_POST['update'])) {

    $Name=$_REQUEST["FullName"]; 
    $Phone=$_REQUEST["Phone"];
    $Address=$_REQUEST["Address"];

    if(empty($Name) || strlen($Name)<6)
    {
        $ValidName="Name Must contain 6 letter !!";
        $hasError=true;
    }
    if(is_numeric($Name))
    {
        $ValidName="Name Can be numeric value";
    }
    
    else 
         $Var_Name=$Name;
    

    
    if(empty($Phone))
    {
        $ValidPhone="Phone Must Required !!";
        $hasError=true;
    }
    
    
    else if(!is_numeric($Phone ))
    {
        $hasError=true;
        $ValidPhone="Phone must be numeric number ";
        $hasError=true;
    
    }
    else 
    {
        $Var_Phone=$Phone;
    }   
    
    if(empty($Address))
{
    $ValidAddress="Address can not be empty!";
    $hasError=true;
}
if(isset($_REQUEST["gender"]))
{
    $Var_Gender=$_REQUEST["gender"];
}
else{
    $validateradio= " Please Select Your Gender";
    $hasError=true;
}




if($hasError==false)
{
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"customer_reg",$Name,$_SESSION['Email'],$Phone,$Address,$Var_Gender);
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
}
if (isset($_POST['Delete'])) 
{
    $Email=$_SESSION['Email'];
    $connection = new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->DeleteUser($conobj,"customer_reg",$Email);
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
