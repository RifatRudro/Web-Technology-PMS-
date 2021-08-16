<?php   include "..\Control\AgentLoginValidation.php" ; 

if(isset($_SESSION["Email"])){

    header("location: Agent.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<script src= "../js/AgentLoginValidation.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/design.css">
<title>Login Form </title>

</head>

<script>
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
  </script>

<body style="background-image: url('background2.jpg');">
<div class= "header sticky">
    <h1>Welcome To Property Manage System </h1> 
</div>
<div class ="topnav">
 <a href="AgentRegistration.php">Registration</a>
 <a href="../../Admin/MainPage.php">Home</a>
</div>
<form action="" method="post" onsubmit="return validateForm()">
<tr>
<td>

<div id="flip">
<legend>Slide to LOG IN into the System </legend> 
</div>

<div id="panel">
<fieldset>
<legend>Agent Login</legend>

<table>

<font color="red"> *Required
<div>
<tr>
<td><b> Usrename :  </td></b>
<td><input type="text" placeholder="Enter Username" id="username" name="user"> <?php echo $validateemail; ?>*</td>
<td><p id="errorusername"></p></td> 
</tr>

<tr>
<td><b>Password :  </td></b>
<td><input type="password" placeholder="Enter Password" id="password" name="password"><?php echo $validatepassword; ?>*</td>
<td><p id="errorpasword"></p></td> 
</tr>
<td>
  <?php echo $LoginError; ?>
<br>

</td>
<tr>
<td> <input type="submit" name="Login"> 
<input type="reset" name="Reset">
</td>
</div>
</div>
</tr>
</div>
</table>

</fieldset>

</form>

</body>

</html>