<?php
include "..\model\databaseconnection.php";
$validateemail=$Name=$Email=$User=$User1=$Phone=$Address=$DOB=$Gender=$UserType=$File="";
$hasError=false;
$UserFound=$checked1=$checked2=$checked3="";

$Email=$_POST["Email"];
if($Email=="")
{
    echo "Enter a mail to search an Agent";
}
else {
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowData2($conobj,"agent_reg",$Email);
$UserType="Agent";
if ($userQuery->num_rows > 0) {
    $UserFound="User Found !!!";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $Name=$row["Name"];
      $Email=$row["Email"];
     
      $User=$row["Username"];
      $Phone=$row["Phone"];
      $Address=$row["Address"];
      $DOB=$row["DOB"];
      $File=$row["File_Path"];

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




      echo "Name : <b>".$Name."</b><br>";
      echo "Email : <b>".$Email."</b><br>";
      echo "User Name : <b>".$User."</b><br>";
      echo "Gender : <b>".$Gender."</b><br>";
      echo "Phone : <b>".$Phone."</b><br>";
      echo "Address : <b>".$Address."</b><br>";
      echo "Joining Date : <b>".$DOB."</b><br>";
      echo "User Type : <b>".$UserType."</b><br>";
      echo "<td> <img src='".'../../Agent/Agent/'.$File."' width='15%'> <td>"; 
      echo "<br><br>";   
  } 

}
else {
echo "User Doesn't Found !!!<br>";
$UserFound="User Doesn't Found !!!";

}



}

if (isset($_POST['Update'])) 
{
  $Gender="";
  $Name=$_REQUEST['Name'];
  $Email=$_REQUEST['Email'];
  $User=$_REQUEST["User"];
  $Phone=$_REQUEST['Phone'];
  $Address=$_REQUEST['Address'];
  $DOB=date('Y-m-d', strtotime($_POST['DOB']));
  $UserType="Agent";
  echo "Helloooooooooooo ".$User;

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

$userQuery=$connection->UpdateAgent($conobj,"agent_reg",  $Name,$Email,$User,$Phone,$Address,$Gender,$DOB);
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
    $User=$_REQUEST["User"];
    $connection = new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->DeleteUserReq($conobj,"agent_reg",$Email);
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
