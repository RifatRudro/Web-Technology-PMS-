<?php
//include('../model/DatabaseConnection.php');


$validateradio=$ValidName=$validateemail=$ValidUserName=$ValidPhone=$ValidAddress="";
 
$Var_Name=$Var_Email=$Var_Password=$Var_Code=$Var_Phone=$Var_Gender="";

 $error=$Name=$Email=$Phone=$Address=$User=$Date=$Gender="";
 $hasError=false;

if (isset($_POST['update'])) 
{

    $Name=$_REQUEST["Name"]; 
    $Phone=$_REQUEST["Phone"];
    $Address=$_REQUEST["Address"];
    $User=$_REQUEST["Username"];
    $Date = date('Y-m-d', strtotime($_POST['Date']));


    if(empty($Name) || strlen($Name)<5)
    {
        $ValidName="Name Must contain 5 letter !!";
        $hasError=true;
    }
    if(is_numeric($Name))
    {
        $ValidName="Name Can be numeric value";
    }
    
    else 
         $Var_Name=$Name;
    
    
    if($User<5)
    {
        $hasError=true;
        $ValidUserName="Username must contain 5 character";
    }
    
 
    
    

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

$userQuery=$connection->UpdateUser($conobj,"agent_reg",$Name,$_SESSION['Email'],$_SESSION["Username"],$Phone,$Address,$Var_Gender,$Date);
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

if(isset($_POST['delete']))
{
$User=$_REQUEST["Username"];
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();

$userQuery=$connection->deleteuser($conobj,"agent_reg",$User);
if($userQuery==TRUE)
{
    echo "Delete successful"; 
}
else
{
    echo "Could not Delete";    
    
}
$connection->CloseCon($conobj);
}


?>
