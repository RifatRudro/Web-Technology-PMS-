<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/design.css">
</head>
<body style="background-image: url('background2.jpg');">
<div class= "header sticky">
<h2>Here All Customer's Message</h2>
</div>
<div class="topnav">
<a href="agent.php">Back</a>
</div>
<?php
include "../model/DatabaseConnection.php";
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowAll($conobj,"C_SMS");

if ($userQuery->num_rows > 0) {
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $Email=$row["Email"];
      $Subject=$row["Subject"]; 
      $Message=$row["Message"];
      
      echo "<b>Customer Email: </b>".$Email."<br>";
      echo "<b>Subject : </b>".$Subject."<br>";
      echo "<b>Message : </b>".$Message."<br><br><br>";
  } 
}

?>
</body>

</html>