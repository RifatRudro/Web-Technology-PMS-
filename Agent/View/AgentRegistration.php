<?php   include "..\Control\AgentRegValidation.php" ; ?>


<!DOCTYPE html>
<html>
<head>
<script src= "../js/AgentRegValidation.js"></script>
<link rel="stylesheet" type="text/css" href="../css/design.css">

<title>Registration Form </title>

</head>
<body style="background-image: url('background2.jpg');">
<div class= "header sticky">
    <h1>Welcome To Property Manage System </h1> 
</div>
<div class="topnav">
<a href="..\..\admin\MainPage.php">Home</a>
<a href="AgentLogin.php">Login</a>
</div>
<form action="..\Control\process.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
<tr>
<td>
<fieldset>
<legend>Agent Sign Up</legend>



<table>
<font color="red"> *Required
<br>
<br>
<div>
<tr>
<td>Name : </td>
<td><input type="text" id ="name" placeholder="Enter your Name" name="name"> <?php echo $ValidName; ?>*</td>
<td><p id="errorname"></p></td>
</tr>


<tr>
<td> Email :  </td>
<td><input type="text" id= "email" placeholder="Enter Email" name="email"> <?php echo $validateemail; ?>*</td>
<td><p id="erroremail"></p></td>
</tr>

<tr>
<td> Username :  </td>
<td><input type="text" placeholder="Set Your Username" id= "username" name="Username"> <?php echo $ValidUser; ?>*</td>
<td><p id= "errorusername"></p> 
</tr>



<tr>
<td>Password :  </td>
<td><input type="password" placeholder="Enter Password" id= "password" name="password"><?php echo $validatepassword; ?>*</td>
<td><p id= "errorpassword"></p> 
</tr>


<tr>
<td>Confirm Password :  </td>

<td><input type="password" placeholder="Enter Confirm Password" id="cpassword"  name="confirmpassword"><?php echo $validateconfirmpassword; ?>*</td>
<td><p id= "errorcpassword"></p>
</tr>


<tr>
<td>Phone: </td>
<td> <input type="text" placeholder="Enter Phone Number" id="phone" name="phone"><?php echo $ValidPhone; ?>*</td>
<td><p id= "errorphone"></p>
</tr>

<tr >
<td> Address: </td>
<td>
<input type="text" placeholder="Street" name="street"> <?php echo $ValidStreet ?>          
<input type="text" placeholder="City" name="city"><?php echo $ValidCity ?>  
<input type="text" placeholder="Postal Code" name="postal" > <?php echo $ValidPostal ?> *</td>
<tr>

<td>Date of Birth</td>
<td> <input type="date" id="birthday" name="birthday"><?php echo $Date; ?>*</td>

</tr>

<tr>
<td> Gender : </td>
<td>
<input type="radio" id="gender" name="gender" value="Male"> Male 
<input type="radio" id="gender" name="gender" value="Female"> Female 
<input type="radio" id="gender" name="gender" value="Other"> Other <br> <?php echo $validateradio; ?>
</td>
<td> <p id="errorgen"></p></td>
</tr>

<tr>
<td>Agent Type:</td>
<td>

<input type="checkbox" id="PA" name="PA" value="PropertyAgent"> Property Agent
<input type="checkbox" id="RA" name="RA" value="RentingAgent">Renting Agent
<input type="checkbox" id="AA" name="AA" value="AdviserAgent">Adviser Agent <br> <?php echo $validatecheckbox; ?>
</td>
<td> <p id="errortype"></p></td>
</tr>


<tr>
<td> <label for="file ">Please Choose a Photo : </label> </td>
<td><input type="file" name="fileupload"></td>
</tr>


<tr>
<td> <input type="submit" name="Submit"> 
<input type="reset" name="Reset">
</td>

</tr>
</table>
</div>
</fieldset>
</form>
<div class= "footer">
    <h1>Thanks To Be Part Of Our Family <h1> 
</div>
</body>
</html>