<?php
session_start(); 
include "..\model\DatabaseConnection.php";
include('../control/updatecheck.php');


if(empty($_SESSION["Email"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/updateprofile.css">
</head>
<body style="background-image: url('background.jpg');">

<div class= "header sticky">
    <h1>Admin Update </h1> 
</div>

<div class="topnav">
<a href="Admin.php">Back </a>
<a href="SearchAdminAjax.php">Search Admin</a>
<a href="../control/logout.php"> logout</a>
</div>

<div class="input">
<?php
$User="";
$radio1=$radio2=$radio3="";
$FullName=$Email=$User=$Phone=$Address=$Date=$photo="";
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowData($conobj,"admin_reg",$_SESSION["Email"],$_SESSION["UserName"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $FullName=$row["FullName"];
      $Email=$row["Email"];
     
      $User=$row["UserName"];
      $Phone=$row["Phone"];
      $Address=$row["Address"];
      $Date=$row["Date"];
      $photo=$row["File_Path"];

      if(  $row["Gender"]=="Female" )
      {
           $radio1="checked"; 
      }

      else if($row["Gender"]=="Male")
      {
           $radio2="checked"; 
    }
      else
      {
          $radio3="checked";
      }

   
  } 
}




?>
<form action='' method='post'   enctype="multipart/form-data">
  <table> 
    <tr><td> <p  style="background-color:powderblue;"> Update Image </p></td>
    <td><input type="file" name="fileupload" > </td> </tr>

     <tr><td><p style="background-color:powderblue;"> Username</p> </td>
    <td> <input type="text"  name="UserName" value="<?php echo $User;?>" disabled style="background-color:white;"></td></tr>

    <tr><td> <p style="background-color:powderblue;"> Email</p> </td>
    <td><input type="text" name="Email" value="<?php echo $Email;?>"  disabled  style="background-color:white;"> </td> </tr>
   
    <tr>
      <td><p style="background-color:powderblue;">FullName : </p></td>
   <td> <input type='text' name='FullName' value="<?php echo $FullName; ?>" > <?php echo $ValidName; ?><br><br></td></tr>
   <tr>
      <td><p style="background-color:powderblue;">Phone : </p></td>
      <td> <input type='text' name='Phone' value="<?php echo $Phone; ?>" > <?php echo $ValidPhone;?><br><br></td></tr>

      <tr>
      <td><p style="background-color:powderblue;">Address : </p></td>
       <td> <textarea rows="3" cols="40" name="Address" value='$Address'> <?php echo $Address;?> </textarea> <?php echo $ValidAddress;?><br><br> </td>
</tr>
       <tr>
      <td><p style="background-color:powderblue;">Joining Date: </p></td>
      <td><input type="date" id="Date" name="Date" value="<?php echo $Date; ?>" ><br><br></td></tr>
      <tr>
      <td><p style="background-color:powderblue;">Gender:</p></td>
     <td><input type='radio' name='gender' value='Female'<?php echo $radio1; ?>> <h4 style="background-color:white;">Female </h4>
     <input type='radio' name='gender' value='Male' <?php echo $radio2; ?> > <h4 style="background-color:white;">Male </h4>
     <input type='radio' name='gender' value='Other'<?php  $radio3; ?> > <h4 style="background-color:white;">Other   </h4></td>  </tr> <?php echo $validateradio;?><br><br>
   
     <div class="mydiv"><img src="<?php echo $photo; ?>"  alt="" class="class1-img"></div>
    
     <tr><td>
     <input name='update' type='submit' value='Update'>  
</td></tr>
     <?php// echo $error; ?>
</div>
</body>
</html>