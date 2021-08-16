<?php   include "..\model\DatabaseConnection.php"; ?>
<?php
session_start(); 
$Name="";
$email="";
$Password="";
$validatepassword=$LoginError="";
$validateemail="";
$_Email="";
$_Password="";
$Error=false;
$count=0;
$login_Error=true;
$Photo="";
$loginInfo="";


if(isset($_POST["Login"]))	{

$user=$_REQUEST["user"]; 
$Password=$_REQUEST["password"];


if(empty($user))
{
    $Error=true;
    $validateemail="* You Enter Your Username";
}



if(strlen($Password)<6 || empty($Password))
{
    $Error=true;
    $validatepassword="* You Enter Your Password ";
}
else
{
    $_Password=$Password;
}


if($Error==false)
{
    $validation="True"; 
    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $result=$connection->CheckUser($conobj,"agent_reg",$user,$Password,$validation);
    if ($result->num_rows > 0)
     {
        while($row = $result->fetch_assoc())
        {
        echo "Name: " . $row["Name"]. " - Email: " . $row["Email"]."<br>";
        $_SESSION["Email"]=$row["Email"]; 
        $_SESSION['Name']= $row["Name"];
        $_SESSION["Username"]=$row["Username"]; 
        $_SESSION["Image"]=$row["File_Path"]; 
       
        }
        date_default_timezone_set("Asia/Dhaka");         
        $formdata = array(
            'Username'=> $_SESSION['Username'],
            'Date'=>date("d.m.y"),
            'Time'=>date('h:i:s'),
         );
    
         $existingdata = file_get_contents('../File/data.json');
         $tempJSONdata = json_decode($existingdata);
         $tempJSONdata[] =$formdata;
         $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
         
         if(file_put_contents("../File/data.json", $jsondata)) {
              echo "Data successfully saved <br>";
          }

    } 
    else 
    
    {
       
        $result=$connection->CheckValidation($conobj,"agent_reg",$user,$Password);
        if ($result->num_rows > 0)
        {
           while($row = $result->fetch_assoc())
           {
                $validation=$row["Validation"];
                if($validation=="false")
                {
                        $LoginError="Wait for Admin Approval";
                }
           }

        }
        
    }
    $connection->CloseCon($conobj);


 



}

}

?>