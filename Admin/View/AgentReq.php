


<?php
include "../control/AgentReqCount.php";
include "../control/AgentReqUpdate.php";
$Count=0;
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowAll($conobj,"agent_reg");
$AgentName=$User=$Email=$Phone=$Address=$DOB=$Gender=$AgentType=$File=$Validation="";
$TrueSelected=$FalseSelected=$DeleteSelected="";
//ShowAgent();
/*
echo "

<table border='1'>
<tr>
<th>  Name</th>
<th>  Email</th>
<th>  Username</th>
<th>  Phone</th>
<th> Address </th>
<th> DOB </th>
<th> Gender </th>
<th> AgentType </th>
<th> File </th>
<th> Validation </th>


</tr>";*/
if ($userQuery !== false && $userQuery->num_rows > 0) {
    while($row = $userQuery->fetch_assoc()) {
        if($row['Validation']=='false')
        {
            $Count++;
            $AgentName=$row['Name'];
            $User=$row['Username'];
            $Email=$row['Email'];
            $Phone=$row['Phone'];
            $Address=$row['Address'];
            $DOB=$row['DOB'];
            $Gender=$row['Gender'];
            $AgentType=$row['Agent_Type'];
            $File=$row['File_Path'];
            $Validation=$row['Validation'];
            
            if($Validation=="False")
            {
                $isSelected=true;
                $FalseSelected="Selected";
            }
            else if($Validation=="True"){
                $isSelected=false;
                $TrueSelected="Selected";
            }
            else if($Validation=="Delete"){
                $isSelected=false;
                $DeleteSelected="Selected";
            }
           /* echo "<form action='?EM=".$Email."' method='post' enctype='multipart/form-data'>
            <tr>
            <td> ". $AgentName." </td>
            <td> ". $Email ." <input type='text' name='Email' value='.$Email.'   hidden></td>
            <td>".  $User." </td>
            <td> ". $Phone." </td>
            <td> ". $Address." </td>
            <td> ". $DOB." </td>
            <td> ". $Gender." </td>
            <td> ". $AgentType ."</td>
            <td> ". $File ."</td>
            <td>
            <select name='validation'>
            <option value='True'>True  ".$TrueSelected ." </option>
            <option value='False' ".$FalseSelected .">False</option>
            <option value='Delete' ".$DeleteSelected ." >Reject</option>
            </td>
            <td><input type='submit' name='submit' value='Update'></td>
            </tr>
            
            ";*/


          

            echo "<br><b>".$Count ."</b><br>";
            echo "<b> Name :</b>".$AgentName."<br>";
            echo "<b> Email :</b>".$Email."<br>";
            echo "<b> Username :</b>".$User."<br>";
            echo "<b>Phone :</b>".$Phone."<br>";
            echo "<b> Address :</b>".$Address."<br>";
            echo "<b> DOB :</b>".$DOB."<br>";
            echo "<b> Gender :</b>".$Gender."<br>";
            echo "<b>AgentType :</b>".$AgentType."<br>";
            echo "<b>File :</b>".$File."<br>";
            echo "<b> Status :</b>".$Validation."<br>";
        
        }
    }

}
$connection->CloseCon($conobj);

?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="../css/AgentReq.css">
</head>
<body style="background-image: url('background.jpg');">
<form action="" method="post" enctype="multipart/form-data">
<table border="1">
<tr>
<th>  Name</th>
<th>  Email</th>
<th>     Username</th>
<th>  Phone</th>
<th> Address </th>
<th> DOB </th>
<th> Gender </th>
<th> AgentType </th>
<th> File </th>
<th> Validation </th>

</tr>

<tr>
<td><p style="background-color:powderblue;"> <?php echo $AgentName; ?></td>
<td><p style="background-color:powderblue;"> <?php echo $Email; ?> </p> <input type="hidden" name="Email" value="<?php echo $Email; ?>" ></td>
<td> <p style="background-color:powderblue;"><?php echo $User; ?></td>
<td><p style="background-color:powderblue;"> <?php echo $Phone; ?></td>
<td> <p style="background-color:powderblue;"><?php echo $Address; ?></td>
<td> <p style="background-color:powderblue;"><?php echo $DOB; ?></td>
<td> <p style="background-color:powderblue;"><?php echo $Gender; ?></td>
<td> <p style="background-color:powderblue;"><?php echo $AgentType; ?></td>
<td> <?php echo "<img src='".'../../Agent/Agent/'.$File."'width:10%; height:5%;aligh='left'><br><br>";?> </td>

<td>
<select name="validation">
<option value="True">True  <?php echo $TrueSelected; ?> </option>
<option value="False" <?php echo $FalseSelected; ?> >False</option>
<option value="Delete" <?php echo $DeleteSelected; ?> >Reject</option>
</td>
<td><input type="submit" name="submit" value="Update"></td>
</tr>

</table>
<a href="Admin.php"> Back</a>
</form>
</form>

</body>
</html>



