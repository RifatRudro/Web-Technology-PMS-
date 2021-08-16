<?php
include "../model/DatabaseConnection.php";
$Phone="";
$Phone=$_POST["Phone"];

if($Phone=="")
{
    echo "Phone Empty";
}
else
{

    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $result=$connection->CheckPhone($conobj,"admin_reg",$Phone);
    if ($result->num_rows > 0)
    {
       echo "Phone Already Used";
    }

    else{
            echo "Unique Phone";
    }
    $connection->CloseCon($conobj);
}




?>