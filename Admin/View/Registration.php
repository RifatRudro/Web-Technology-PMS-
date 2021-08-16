<?php   include "..\Control\RegValidation.php" ;
       // include "..\Control\process.php" ; 

?>

<!DOCTYPE html>
<html>
<head>
<script src="..\javaScript\RegValidation.js">  </script>
<script src="..\javaScript\CheckEmail.js"> </script>
<script src="..\javaScript\CheckUsername.js"> </script>
<script src="..\javaScript\CheckPhone.js"> </script>
<link rel="stylesheet" type="text/css" href="../css/design.css">


</head>
<body style="background-image: url('background.jpg');">

<div class= "header sticky">
    <h1>Admin Sign Up </h1> 
</div>

<div class="topnav">
<a href="Login.php">Login</a>
<a href="..\MainPage.php">Home</a>

</div>

<form action="..\Control\process.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
<h1 class="admin"></h1>
<tr>
<td>


<table>
  <div >
<tr>
<td> <p style="background-color:powderblue;">Full Name : </p></td>
<td><input type="text" placeholder="Enter your Name" name="name" id="name"> <?php echo $ValidName; ?></td><td><p id="errorname" style="background-color:white;"></p></td>
</tr>

<tr>
<td> <p style="background-color:powderblue;">UserName : </p></td>
<td><input type="text" placeholder="Enter your UserName" name="username" id="username" onkeyup="Checkmyuser()"> <?php echo $ValidUserName; ?>  </td><td><p id="errorusername" style="background-color:white;"></p>
</tr>

<tr>
<td><p style="background-color:powderblue;"> Email : </p> </td>
<td><input type="text" placeholder="Enter Email" name="email" id="email" onkeyup="showmyuser()"> <?php echo $validateemail; ?> </td><td><p id="erroremail" style="background-color:white;"></p>
</tr>


<tr>
<td><p style="background-color:powderblue;">Password :  </p></td>
<td><input type="password" placeholder="Enter Password" name="password" id="password"><?php echo $validatepassword; ?></td><td><p id="errorpass" style="background-color:white;"></p>
</tr>


<tr>
<td><p style="background-color:powderblue;">Confirm Password :  </p></td>
<td><input type="password" placeholder="Enter Confirm Password" name="confirmpassword" id="confPassword"><?php echo $validateconfirmpassword; ?></td><td><p id="errorconfPass" style="background-color:white;"></p>
</tr>


<tr>
<td><p style="background-color:powderblue;">Country Code: </p></td>
<td>
<select name="code" placeholder="Choose your country code" id="countryCode">
<optgroup label="Country Code">
<option value="+88">+88</option>
	<option value="+91">+91</option>
    <option value="+86">+86</option>
    <option value="+44">+44</option>
  </select> <?php echo $ValidCode; ?>
</td>
</tr>
<tr>
<td><p style="background-color:powderblue;">Phone</p></td>
<td><input type="text" placeholder="Enter Phone Number" id="phone" name="phone" onkeyup="CheckmyPhone()"><?php echo $ValidPhone; ?></td><td><p id="errorphone" style="background-color:white;"></p>
</tr>

        <tr >
					<td> <p style="background-color:powderblue;">Address : </p></td>
					<td><input type="text" placeholder="Street Address" name="street" id="street"><?php echo $ValidStreet ?> </td><td><p id="errorstreet" style="background-color:white;"></p>
					
				</tr>

			   	<tr>
           <td></td>
				  <td><input type="text" placeholder="City" name="city" id="city"><?php echo $ValidCity ?> </td> <td><p id="errorcity" style="background-color:white;"></p>
          </tr>

          <tr>
          <td></td>
				  <td> <input type="text"  placeholder="State" name="state" id="state"><?php echo $ValidState ?></td><td><p id="errorstate" style="background-color:white;"></p>
          </tr>

          <tr>
          <td></td>
					<td>  <input type="text" placeholder="Postal/Zip Code" name="postal" id="postal"> <?php echo $ValidPostal ?> </td><td><p id="errorpostal" style="background-color:white;" ></p>
					
				</tr>

<tr>
<td><p style="background-color:powderblue;">Joining Date: </p></td>
<td> <input type="date" id="date" name="birthday"><?php echo $Date; ?></td>
</tr>

<tr>
<td><p style="background-color:powderblue;"> Gender : </p></td>
<td><input type="radio" name="gender" value="Male" id="gender"> <h4 style="background-color:powderblue;"> Male </h4>
<input type="radio" name="gender" value="Female" id="gender"><h4 style="background-color:powderblue;"> Female </h4>
<input type="radio"  name="gender" value="Other" id="gender"> <h4 style="background-color:powderblue;">Other </h4>  <br> <?php echo $validateradio; ?><br></td><td><p id="errorgender" style="background-color:white;"></p>


</tr>




<tr>
<td> <label for="file "><p style="background-color:powderblue;">Please Choose a photo[Optional] : </p></label> 
</td>
<td><input type="file" name="fileupload"></td>
</tr>


<tr>
<td> <input type="submit" name="Submit"> </td>
</tr>
<tr>
<td><input type="reset" name="Reset">
</td>
</tr>

</table>
</div>
<div class="footer">
<h1aligh="center">All rights reserve to this Md Hamid </h1>
</div>

</form>
</body>
</html>