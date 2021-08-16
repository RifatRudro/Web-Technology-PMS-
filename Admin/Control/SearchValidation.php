<?php
include "..\model\databaseconnection.php";
$validateemail=$FullName=$Email=$User=$Phone=$Address=$Date=$Gender=$UserType=$File="";
$hasError=false;
$UserFound="";

$Email=$_POST["Email"];

if($Email=="")
{
  echo "Enter Anything to search";
}
else{
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowData2($conobj,"admin_reg",$Email);
$UserType="Admin";
if ($userQuery->num_rows > 0) {
  $UserFound="User Found !!!";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $FullName=$row["FullName"];
      $Email=$row["Email"];
     
      $User=$row["UserName"];
      $Phone=$row["Phone"];
      $Address=$row["Address"];
      $Date=$row["Date"];
      $File=$row["File_Path"];

      if(  $row["Gender"]=="Female" )
      {
           $radio1="checked"; 
           $Gender="Female";
      }

      else if($row["Gender"]=="Male")
      {
           $radio2="checked"; 
           $Gender="Male";
    }
      else
      {
          $radio3="checked";
          $Gender="Other";
      }


      echo "Name : <b>".$FullName."</b><br>";
      echo "Email : <b>".$Email."</b><br>";
      echo "User Name : <b>".$User."</b><br>";
      echo "Gender : <b>".$Gender."</b><br>";
      echo "Phone : <b>".$Phone."</b><br>";
      echo "Address : <b>".$Address."</b><br>";
      echo "Joining Date : <b>".$Date."</b><br>";
      echo "User Type : <b>".$UserType."</b><br>";
      echo "<td> <img src='".$File."' width='15%'> <td>"; 
      echo "<br><br><br>";
   
  } 




}
else {
//echo "User Doesn't Found !!!<br>";
$UserFound="User Doesn't Found !!!";

}

}



?>
