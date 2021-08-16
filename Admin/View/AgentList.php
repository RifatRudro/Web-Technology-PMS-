<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/updateprofile.css">
</head>
<body style="background-image: url('background.jpg');">

<div class= "header sticky">
    <h1>Agent List </h1> 
</div>

<div class="topnav">
<a href="Admin.php">Back </a>
<a href="SearchAgent.php">Search Agent </a>
<a href="../control/logout.php"> logout</a>
</div>
</body>
</html>

<?php 
include "../model/databaseConnection.php";

$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowAll($conobj,"agent_reg");  

function TableHeader()
{
    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->ShowAll($conobj,"agent_reg");     
echo "
<table border='1'>
<tr>
<th>  Name</th>
<th>  Email</th>
<th>  Username</th>
<th>  Phone</th>
<th> Address </th>
<th> Joining Data </th>
<th> Gender </th>
<th> File </th>

</tr>";
}


function ShowAdmin()
{
    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->ShowAll($conobj,"agent_reg");     
echo "
<table border='1'>
<tr>
<th style='background-color:#a3f0cd;'>  Name</th>
<th style='background-color:#a3f0cd;'>  Email</th>
<th style='background-color:#a3f0cd;'>  Username</th>
<th style='background-color:#a3f0cd;'>  Phone</th>
<th style='background-color:#a3f0cd;'> Address </th>
<th style='background-color:#a3f0cd;'> Joining Data </th>
<th style='background-color:#a3f0cd;'> Gender </th>
<th style='background-color:#a3f0cd;'> Agent Type </th>
<th style='background-color:#a3f0cd;'> Validation </th>
<th style='background-color:#a3f0cd;'> Profile Picture </th>

</tr>";
    if ($userQuery !== false && $userQuery->num_rows > 0) {
        while($row = $userQuery->fetch_assoc()) {



            echo "
            <tr>
            <td style='background-color:#a3f0cd;'> ". $row["Name"]." </td>
            <td  style='background-color:#a3f0cd;'> ". $row["Email"] ."</td>
            <td style='background-color:#a3f0cd;'>".  $row["Username"]." </td>
            <td style='background-color:#a3f0cd;'> ". $row["Phone"]." </td>
            <td style='background-color:#a3f0cd;'> ". $row["Address"]." </td>
            <td style='background-color:#a3f0cd;'> ". $row["DOB"]." </td>
            <td style='background-color:#a3f0cd;'> ". $row["Gender"]." </td>
            <td style='background-color:#a3f0cd;'> ". $row["Agent_Type"]." </td>
            <td style='background-color:#a3f0cd;'> ". $row["Validation"]." </td>
            <td>" .  "<img src='".'../../Agent/Agent/'.$row['File_Path']."' width='15%'> <td>";
        }
    }
}
 


if ($userQuery->num_rows > 0)
{
    ShowAdmin();
}
else
{
    echo "<br>No Agent Found<br>";    
    
}
$connection->CloseCon($conobj);


?>