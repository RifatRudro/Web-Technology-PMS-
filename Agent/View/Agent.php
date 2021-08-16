<!DOCTYPE html>
<html>
<head> 
    <link rel="stylesheet" type="text/css" href="../css/design.css">
</head>
<body style="background-image: url('background2.jpg');">
<div class= "header sticky">
    <h1>Agent Profile </h1>
</div>
<div class= "topnav">
<a href="profile.php">Profile Details</a>
<a href="addpost.php">Add Property Post </a>
<a href="showallproperty.php">All Property Post </a> 
<a href="SearchUser.php">Search Property</a>
<a href="CustomerMsg.php">Customer's Message</a>
<a href="../control/logout.php">logout</a>
</div>
<fieldset>
    <legend>Agent Profile Informatuion </legend>
<?php
session_start();
$img=$_SESSION['Image'];

$Cookie_name=$_SESSION['Email'];
$Cookie_value=$_SESSION['Name'];



if(isset($_SESSION["Name"])) 
{

}

$name="Agent";
$value=$_SESSION['Name'];

if(!isset($_COOKIE[$name]))
{
    setcookie($name,$value,time()+(200),"/");

}


//echo "<h3> Name : ".$_SESSION['Name']." </h3>";
//echo "<h3> Email :".$_SESSION['Email']."</h3>";

echo '<div class="class1">'."<img src='".$img."' class='class1-img'> <br><br></div>";
echo'<div class="mydiv"> '."<h3> Name : ".$_SESSION['Name']." </h3>"."<h3> Email :".$_SESSION['Email']."</h3>";

/*
if(!isset($_COOKIE[$name]))
{
    echo "New User : ".$_SESSION['Name'];
}
else
{
    echo "Old User : ".$_COOKIE["Agent"];
}
*/



?>
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
<div class="footer">
<h1><p>@ All Credits goes to Rifat Rudro </p></h1>
</div>
 
</body>   
</html> 


    








