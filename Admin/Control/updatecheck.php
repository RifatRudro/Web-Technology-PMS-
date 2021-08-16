<?php
//include('../model/DatabaseConnection.php');
//include "RegValidation.php";

$validateradio=$ValidName=$validateemail=$ValidUserName=$ValidPhone=$ValidAddress=$target_File="";
 
$Var_Name=$Var_Email=$Var_Password=$Var_Code=$Var_Phone=$Var_Gender="";

 $error=$Name=$Email=$Phone=$Address=$User=$Date=$Gender=$Photo="";
 $hasError=false;

 ///



 ///






if (isset($_POST['update'])) {

$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowData($conobj,"admin_reg",$_SESSION["Email"],$_SESSION["UserName"]);
 
if ($userQuery->num_rows > 0) {
    while($row = $userQuery->fetch_assoc()) {
      $photo=$row["File_Path"];
  } 
}


    $Name=$_REQUEST["FullName"]; 
    $Phone=$_REQUEST["Phone"];
    $Address=$_REQUEST["Address"];
    $User=$_SESSION["UserName"];
    $Date = date('Y-m-d', strtotime($_POST['Date']));


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
if(is_uploaded_file($_FILES["fileupload"]["tmp_name"]))
{
    //echo "Uploaded new file";
    $target_File="../File/".$_FILES["fileupload"]["name"];
    if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
    {
        echo "You have uploadede a new file";
    
    }

}
else 
{
    $target_File=$photo;
    echo "Not Uploaded new file";
}

/*
if($_FILES["fileupload"]["name"]!="")
{
    $target_File="../File/".$_FILES["fileupload"]["name"];
    if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
    {
        echo "You have uploadede a new file";
    
    }
    
}*/





if($hasError==false)
{




$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();


$userQuery=$connection->UpdateUser($conobj,"admin_reg",$Name,$_SESSION['Email'],$_SESSION["UserName"],$Phone,$Address,$Var_Gender,$Date,$target_File);
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


?>
