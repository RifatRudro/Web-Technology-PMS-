<?php   include "..\Control\LoginValidation.php" ; 
if(isset($_SESSION["Email"])){

    header("location: Admin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<script src="..\javaScript\LoginValidation.js"></script>
<link rel="stylesheet" type="text/css" href="../css/Login.css">
<title>Login Form </title>

</head>
<body style="background-image: url('background.jpg');">
<div class= "header sticky">
    <h1>Admin Sign In </h1> 
</div>

<div class="topnav">
<a href="Registration.php">Registration</a>
<a href="..\MainPage.php">Home</a>

</div>
<form action="" onsubmit="return validateForm()" method="post">
<tr>
<td>
<fieldset>

<table>
<tr>
<td> Email :  </td>
<td><input type="text" placeholder="Enter Email" name="email" id="Email"> <?php echo $validateemail; ?><p id="errormail"></p></td>

</tr>


<tr>
<td>Password :  </td>
<td><input type="password" placeholder="Enter Password" name="password" id="password"><?php echo $validatepassword; ?> <p id="errorpass">  </td>
</tr>


<tr>
<td> <input type="submit" name="Login"> 
<input type="reset" name="Reset"></td>
<td>
<?php echo $loginInfo; ?>
</td>
</tr>
</table>

</fieldset>

</form>

<div class="footer">
<h1aligh="center">All rights reserve to this Md Hamid </h1>
</div>


</body>

</html>