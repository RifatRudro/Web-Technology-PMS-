<?php session_start();
include "../control/AgentReqCount.php";
$Photo=$FullName="";
?>
<html>
    <head>

    <link rel="stylesheet" type="text/css" href="../css/Admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="background-image: url('background.jpg');">
<script >
  $(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});

$(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow");
  });
});

$(document).ready(function(){
  $("#flip3").click(function(){
    $("#panel3").slideToggle("slow");
  });
});

$(document).ready(function(){
  $("#flip4").click(function(){
    $("#panel4").slideToggle("slow");
  });
});

$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});

</script>


<div class= "header sticky">
    <h1>Admin Profile</h1> 
</div>

<div class="topnav">



</div>
<table>
  <tr>

  <td>
<div id="flip2">
<fieldset>
  <legend>Admin Operation</legend>
<div id="panel2">
<a href="profile.php">Update Profile</a><br>
<a href="SearchAdminAjax.php">Search Admin</a><br><br>
<a href="..\control\Logout.php">logout</a> 
</div>
</fieldset>
</div>
</td>




<td>
<div id="flip">
<fieldset>
<legend>Agent Operation</legend>
<div id="panel">

<a href="SearchAgentWithAjax.php">Search Agent</a><br>
<a href="../../Agent/view/AgentRegistration.php"> Add Agent</a> <br>
<a href="AgentList.php">Agent List</a> <br>
<a href="showallproperty.php">Property List</a> <br>
<a href="AgentReq.php">Agent Request <?php echo "<b>".$Count."</b>";?></a> <br>
</div>
</fieldset>
</div>
</td>


<td>
<div id="flip3">
<fieldset>
<legend>Customer Operation</legend>
<div id="panel3">

<a href="SearchCustomer.php">Search Customer</a><br>
<a href="../../customer/view/Registration.php"> Add Customer</a> <br>
<a href="CustomerList.php">Customer List</a> <br><br>
</div>
</fieldset>
</div>
</td>

<td>
<div id="flip4">
<fieldset>
<legend>Seller Operation</legend>
<div id="panel4">
<a href="SearchSeller.php">Search Seller</a><br>
<a href="../../PropertyOwner/View/signup.php"> Add Seller</a> <br>
<a href="SellerList.php">Seller List</a> <br> 
<a href="ShowSellerProperty.php">Property List</a> <br> 
<a href="SellerMsg.php">Seller Msg</a> <br> 

</div>
</fieldset>
</div>
</td>



</tr>
</table>


<?php
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowData($conobj,"admin_reg",$_SESSION["Email"],$_SESSION["UserName"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $FullName=$row["FullName"];
      $Email=$row["Email"]; 
      $User=$row["UserName"];
      $photo=$row["File_Path"];
 
  } 
}



$Cookie_name=$_SESSION['Email'];
$Cookie_value=$_SESSION['Name'];
if(isset($_SESSION["Name"])) 
{
   
}

$name=$_SESSION['UserName'];
$value=$_SESSION['Name'];

if(!isset($_COOKIE[$name]))
{
    setcookie($name,$value,time()+(2000),"/");
    
}

//echo "<h3> Name : ".$_SESSION['Name']." </h3>";
//echo "<h3> Email :".$_SESSION['Email']."</h3>";
//echo "<h3> Image : ".$_SESSION['file']."</h3>";
$img=$_SESSION['file'];
//'<div class="class1">'.echo "<img src='".$img."' class='class1-img'> <br><br></div>"
echo '<div class="class1">'."<img src='".$photo."' class='class1-img'> <br><br></div>";
echo'<div class="mydiv"> '."<h3> Name : ".$FullName." </h3>"."<h3> Email :".$_SESSION['Email']."</h3>";
if(!isset($_COOKIE[$name]))
{
    echo "<p>New User : ".$_SESSION['Name']."</p>";
}
else {
    echo "<p>Old User : ".$_COOKIE[$name]."</p>";
}


?>

<button id="hide">Hide</button>
<button id="show">Show</button>


</body>
</html>