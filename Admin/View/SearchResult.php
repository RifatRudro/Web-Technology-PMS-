<?php /*include "..\control\SearchValidation.php"; 
include "..\model\databaseconnection.php";
include "..\control\searchvalidation.php";
$validateemail=$FullName=$Email=$User=$Phone=$Address=$Date=$Gender=$UserType="";
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowData2($conobj,"admin_reg",$Email);
$UserType="Admin";
if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $FullName=$row["FullName"];
      $Email=$row["Email"];
     
      $User=$row["UserName"];
      $Phone=$row["Phone"];
      $Address=$row["Address"];
      $Date=$row["Date"];

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
    }
}

?>

<h2>Profile Page</h2>
<table>
    <tr>  
    <td>Name : </td>
    <td><?php echo $FullName ?></td>
    </tr>

    <tr>  
    <td>Email : </td>
    <td><?php echo $Email ?></td>
    </tr>

    <tr>  
    <td>UserName : </td>
    <td><?php echo $User ?></td>
    </tr>
    
    <tr>  
    <td>Gender : </td>
    <td><?php echo $Gender ?></td>
    </tr>

    <tr>  
    <td>Phone : </td>
    <td><?php echo $Phone ?></td>
    </tr>

    <tr>  
    <td>Address : </td>
    <td><?php echo $Address ?></td>
    </tr>

    <tr>  
    <td>Joining Date : </td>
    <td><?php echo $Date ?></td>
    </tr>
    
    <tr>  
    <td>User Type : </td>
    <td><?php echo $UserType ?></td>
    </tr>

</table>
<a href="SearchUser.php">vBack </a> <br>