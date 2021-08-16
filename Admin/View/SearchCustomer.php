<?php 

include "..\control\CustomerSearchValidation.php";
?>




<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="../css/search.css">
</head>

<body>
<div class= "header sticky">
    <h1>Search Customer</h1> 
</div>


<div class="topnav">
<a href="Admin.php">Home </a>
<a href="../../customer/view/Registration.php"> Add Customer</a> 

<a href="CustomerList.php">Customer List</a> 
</div>
<div>
<form action='' method='post'>
Email: <input type="text" name="Email" placeholder="Enter Email to Search" ><?php echo $validateemail; ?><br><br>
<input name='Search' type='submit' value='Search Customer'>  <br><br>
<h2><?php echo $UserFound; ?></h2>
</form>
<table border="1">

<form action='' method='post'>
Name : <input type="text" name='Name' value="<?php echo $Name; ?>" ><br><br>
Email : <input type="text" name='Email' value="<?php echo $Email; ?>" readonly="readonly" ><br><br>

Gender : <input type="radio" id="gender" name="gender" value="Male" <?php echo $checked1;?> > Male 
<input type="radio" id="gender" name="gender" value="Female" <?php echo $checked2;?>> Female 
<input type="radio" id="gender" name="gender" value="Other" <?php echo $checked3;?>> Other <br> 

Phone : <input type="text" name='Phone' value="<?php echo $Phone; ?>" ><br><br>
Address : <input type="text" name='Address' value="<?php echo $Address; ?>" ><br><br>
User Type : <input type="text" name='UserType' value="<?php echo $UserType; ?>" ><br><br>
<input name='Update' type='submit' value='Update Customer'>  <br><br>
<input name='Delete' type='submit' value='Delete Customer'>  <br><br>
</table>
</form>
</div>
</body>
</html>


