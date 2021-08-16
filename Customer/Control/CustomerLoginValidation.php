<?php
include "../Model/DatabaseConnection.php";
$Val_Email=$Val_Password=$Var_Pass=$Var_Email="";
$hasError=false;
$LoginInfo="";
session_start();


if(isset($_POST["Login"]))	{

    $email=$_REQUEST["email"]; 
    $Password=$_REQUEST["password"];
    
    
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $hasError=true;
        $Val_Email="You Must Enter Valid Email";
    }
    else{
        $Var_Email=$email;
    }

    if(strlen($Password)<6)
    {
        $Val_Password="Password must contain 6 character";
    }
    else{
        $Var_Pass=$Password;
    }

if($hasError==false)
    {

    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $result=$connection->CheckUser($conobj,"Customer_reg",$email,$Password);
    $connection->CloseCon($conobj);
    
    if ($result->num_rows > 0)
    {
       while($row = $result->fetch_assoc())
       {
       echo "Name: " . $row["Name"]. " - Email: " . $row["Email"]."<br>";
       $_SESSION["Email"]=$row["Email"]; 
       $_SESSION["Name"]= $row["FullName"];

       }
       } 
       else {
        $LoginInfo="Failed";
       }

    
    /*
    $data = file_get_contents("../File/data.json");
    $mydata = json_decode($data);
    $count=0;
    foreach($mydata as $myobject)
    {
        $count++;
    }

    for($i=0;$i<$count;$i++)
    {
        if($mydata[$i]->Email==$Var_Email && $mydata[$i]->Password==$Var_Pass) 
        {
           $Name=$mydata[$i]->Name;
           header("location: ../view/customer.php");
        
        }
    }*/
}
     
    
    

}



?>