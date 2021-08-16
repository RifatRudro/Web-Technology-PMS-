<!DOCTYPE html>
<html>
<head>
<script src= "../js/AddPropertypostValidation.js"></script>
<link rel="stylesheet" type="text/css" href="../css/addpostdesign.css">
</head>
<body style="background-image: url('background2.jpg');">

<?php
include ('../control/addpostcheck.php');
session_start(); 
if(empty($_SESSION["Email"])) 
{
header("Location: ../control/AgentLogin.php"); // Redirecting To Home Page
}

?>

<div>

<div class ="header sticky">
<h1 align ="center"><u>Add Property Details</u></h1>
</div> 

<div class = "topnav">
<a href="Agent.php">Back </a>
</div>
<br>
<br>
<br>
<br>
<br>
<fieldset>
    <legend>Property Advertise</legend>
<table> 
<form action="" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
<tr>
<td> Property Name: </td>
<td><input type="text" placeholder="Enter Property Name" id="propertyname" name="pname"><br><br></td>
<td><p id="errorpropertyname"></p></td> 

</tr>
<div>
<tr>
<td>Property Description: </td> 
<td><textarea rows="5" cols="5" placeholder="Describe the Property" id="propertydescription" name="pdesc"></textarea><br><br></td>
<td><p id="errorpropertydescription"></p></td>
</tr> 
</div>


<tr>
<td>Property Category: </td> 
<td><input type="text" placeholder="Type Property Category" id= "propertycetegory" name="pcate"><br></td>
<td><p id="errorpropertycetegory"></p></td>
</tr>
</td>

<div>
<tr>
<td>Property price: </td> 
<td><input type="number" placeholder="Enter a Rent price" id= "propertyprice" name="pprice"><br></td>
<td><p id="errorpropertyprice"></p></td>
</tr> 
</div>


<tr>
<td>Property Sample Image:  </td>
<td><input type="file" name="pimage"></td><br><br></td>
</tr>


<tr>
<td>
<input type="submit" name="add" value="Post Property">
</tr>
</td>
</div>

<br>

<br>
</form>
</table>
</fieldset>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
</body>
<div class= "footer">
    <h1>@ All Credits goes to Rifat Rudro<h1> 
</div>
</html>

