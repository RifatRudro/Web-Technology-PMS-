<?php 

//include "..\control\SearchValidation.php";
?>




<!DOCTYPE html>
<html>

<head>
<script src="../JavaScript/Search.js"> </script>
<link rel="stylesheet" type="text/css" href="../css/search.css">
</head>

<body style="background-image: url('background.jpg');">

<div class= "header sticky">
    <h1>Search Admin</h1> 
</div>


<div class="topnav">
<a href="Admin.php">Home </a>
<a href="SearchAgentWithAjax.php"> Agent Operation</a> 
<a href="SearchSeller.php">Seller Operation</a> 
<a href="SearchCustomer.php">Customer Operation</a> 
</div>
<div>

Email: <input type=text name="Email" id="Email" placeholder="Enter Email to Search" onkeyup="showmyuser()"><?php //echo $validateemail; ?><br><br>
<p id="SearchResult"> </p>

</div>
</body>
</html>


