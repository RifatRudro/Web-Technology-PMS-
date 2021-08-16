<?php
include "../model/DatabaseConnection.php";
$Email="";
$Email=$_POST["Email"];

if($Email=="")
{
    echo "Email Empty";
}
else
{

    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $result=$connection->ShowData2($conobj,"admin_reg",$Email);
    if ($result->num_rows > 0)
    {
       echo "Email Already Used";
    }

    else{
            echo "Unique Email";
    }
    $connection->CloseCon($conobj);
}




?>