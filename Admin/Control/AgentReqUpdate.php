<?php
$result=$Email="";
$hasError=false;
if(isset($_POST["submit"]))	{
    if(!empty($_POST['validation']))///country code
    {
       $result= $_POST['validation'];
    } 
if($result=="True" || $result=="False")
{
   $Email=$_POST['Email'];
   echo $result."     ".$Email;
   $connection=new DatabaseConnection();
   $conobj=$connection->OpenCon();
  $userQuery=$connection->UpdateUserReq($conobj,"agent_reg",$result,$Email);


   if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "<br>could not update<br>";    
    
}
$connection->CloseCon($conobj);
}

else if($result=="Delete")
{
    $Email=$_POST["Email"];
    echo $result."     ".$Email;
    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
   $userQuery=$connection->DeleteUserReq($conobj,"agent_reg",$Email);
   
 
    if($userQuery==TRUE)
 {
     echo "Delete successful"; 
 }
 else
 {
     echo "<br>could not delete<br>";    
     
 }
 $connection->CloseCon($conobj);
}


}


?>