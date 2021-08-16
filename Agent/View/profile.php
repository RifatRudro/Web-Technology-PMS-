
<!DOCTYPE html>
<html>
<body style="background-image: url('background2.jpg');">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/design.css">
</head>

<?php
session_start(); 
include "../model/DatabaseConnection.php";
include('../control/UpdateCheck.php');


if(empty($_SESSION["Email"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<div class = "header sticky">
<h1 align ="Center">Agent Profile Information</h1>
</div>

<script>

$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});

</script>



<div class= "topnav">
<a href="Agent.php">Back </a> 
<a href="../control/logout.php"> logout</a>
</div>

<div id="flip">
<fieldset>
  <legend>User Info </legend>
<div id="panel">
  
<?php 
echo '<div class="class1">'."<img src='".$_SESSION["Image"]."' class='class1-img'> <br><br></div>";
?>

<h4 align ='center'>Name:<?php echo $_SESSION["Name"];?></h4>
<h4 align ='center'>User Name:<?php echo $_SESSION["Username"];?></h4>
<h4 align ='center'>Email:<?php echo $_SESSION["Email"];?></h4>
</div>
</fieldset>
</div>
<br>
<br>

<fieldset>
<h1 align ="center">Update Profile Information</h1>
</fieldset>

<br><br>
<?php
$User="";
$radio1=$radio2=$radio3="";
$Name=$Email=$User=$Phone=$Address=$Date="";
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();




$userQuery=$connection->ShowData($conobj,"agent_reg",$_SESSION["Email"],$_SESSION["Username"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $Name=$row["Name"];
      $Email=$row["Email"];
     
      $User=$row["Username"];
      $Phone=$row["Phone"];
      $Address=$row["Address"];
      $Date=$row["DOB"];

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
  else {
    
  }
?>
<fieldset>
 
  <legend>Edit Profile Information</legend>

<form action='' method='post'>
<table> 
<tr>
<td>Email: <?php echo $Email; ?><br><br></td>
</tr>

<tr>
<td>Name: </td>
<td><input type='text' name='Name' value="<?php echo $Name; ?>" > <?php echo $ValidName; ?></td>
</tr>

<tr>
<td>Username: </td> 
<td><input type='text' name='Username' value="<?php echo $User; ?>" > <?php echo $ValidUserName; ?></td>
</tr>

<tr>
<td>Phone:</td> 
<td><input type='text' name='Phone' value="<?php echo $Phone; ?>" > <?php echo $ValidPhone;?></td>
</tr>

<tr>
<td>Address: </td> 
<td><textarea rows="4" cols="50" name="Address" value='$Address'> <?php echo $Address;?> </textarea> <?php echo $ValidAddress;?></td>
</tr>

<tr>
<td>Date of Birth: </td>
<td><input type="date" id="Date" name="Date" value="<?php echo $Date; ?>" ></td>
</tr>

<tr>
<td> Gender: 
     <input type='radio' name='gender' value='Female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='Male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='Other'<?php  $radio3; ?> > Other <?php echo $validateradio;?>
</td>
</tr>
<tr>
<td><input name='update' type='submit' value='Update'></td>
</tr>

<tr> 
<td><input name='delete' type='submit' value='Delete'></td>
</tr> 
</table>

</form>

</div>
</fieldset>

<div class= "footer">
  <h1>Any Issues Cantact Us 24/7 We are Available</h1>
</div>
</body>
</html>