<?php 
include "../model/databaseConnection.php";
$Count=0;
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowAll($conobj,"agent_reg");
$AgentName=$User=$Email=$Phone=$Address=$DOB=$Gender=$AgentType=$File=$Validation="";


if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
        if($row['Validation']=='false')
        {
            $Count++;
        }
       // $Count++;
      
    }

}

    $sql="select * from admin_reg";
    $num=mysqli_num_rows($userQuery);
 // echo $Count." Request";

$connection->CloseCon($conobj);

?>