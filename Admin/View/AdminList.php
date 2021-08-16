<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/updateprofile.css">
</head>
<body style="background-image: url('background.jpg');">

<div class= "header sticky">
    <h1>Admin List </h1> 
</div>

<div class="topnav">
<a href="Admin.php">Back </a>
<a href="SearchUser.php">Search Admin </a>
<a href="../control/logout.php"> logout</a>
</div>
</body>
</html>

<?php 
include "../model/databaseConnection.php";

$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowAll($conobj,"admin_reg");  

function TableHeader()
{
    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->ShowAll($conobj,"admin_reg");     
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
    $userQuery=$connection->ShowAll($conobj,"admin_reg");     
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
<th style='background-color:#a3f0cd;'> Profile Picture </th>

</tr>";
    if ($userQuery !== false && $userQuery->num_rows > 0) {
        while($row = $userQuery->fetch_assoc()) {



            echo "
            <tr>
            <td style='background-color:#a3f0cd;'> ". $row["FullName"]." </td>
            <td  style='background-color:#a3f0cd;'> ". $row["Email"] ."</td>
            <td style='background-color:#a3f0cd;'>".  $row["UserName"]." </td>
            <td style='background-color:#a3f0cd;'> ". $row["Phone"]." </td>
            <td style='background-color:#a3f0cd;'> ". $row["Address"]." </td>
            <td style='background-color:#a3f0cd;'> ". $row["Date"]." </td>
            <td style='background-color:#a3f0cd;'> ". $row["Gender"]." </td>
            <td>" .  "<img src='".$row['File_Path']."' width='15%'> <td>";
        }
    }
}
 


if ($userQuery->num_rows > 0)
{
    ShowAdmin();
}
else
{
    echo "<br>No Admin Found<br>";    
    
}
$connection->CloseCon($conobj);


?>