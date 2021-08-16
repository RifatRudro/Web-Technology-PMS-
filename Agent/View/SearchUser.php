<?php 

//include "..\control\SearchValidation.php";
if(isset($_SESSION["Email"])){

    header("location: Agent.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<script src="../js/Search.js"> </script> 

<link rel="stylesheet" type="text/css" href="../css/design1.css">
</head> 
<body style="background-image: url('background2.jpg');">
<div class= "header sticky">
<h1> Property Search </h1>
</div> 

<div class="topnav">
<a href="Agent.php">Back </a>
</div> 


    <fieldset>
        <legend> Search Property </legend>
<div> 
Property Name: <input type=text name="pname" placeholder="Enter Your Search Property Name" id="pname" onkeyup ="showproperty()" ><br>
<p id="mytext"></p> 

</fieldset>
</div> 
</body>
</html>

