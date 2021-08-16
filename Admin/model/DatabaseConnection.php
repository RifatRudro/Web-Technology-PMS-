<?php
class DatabaseConnection{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pms";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

 function CheckUser($conn,$table,$Email,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $Email."' AND Password='". $password."'");

if ($result->num_rows > 0)
{
    echo "Login Successful <br>";
}

else {
echo "Login Failed !<br>";
}
return $result;
}

function CheckUsername($conn,$table,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE UserName like '".$User."' ");
    return $result;
}

function CheckPhone($conn,$table,$Phone)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Phone like '".$Phone."' ");
    return $result;
}

function ShowData($conn,$table,$Email,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $Email."' AND UserName='". $User."'");
    return $result;
}

function ShowData2($conn,$table,$Email)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email like '%".$Email."%' ");
    return $result;
}
//
 


 function InsertData($conn,$table,$Name,$User,$email,$Password,$Phone,$Address,$Date,$validateradio,$target_File)
 {
    $check=false;
    $stmt=$conn->prepare("INSERT INTO admin_reg (FullName,UserName,Email,Password,Phone,Address,Date,Gender,File_Path) VALUES(?,?,?,?,?,?,?,?,?)"); 
    $stmt->bind_param("sssssssss",$Name,$User,$email,$Password,$Phone,$Address,$Date,$validateradio,$target_File);
    if($stmt->execute())
    {
        echo "User Added Successfully!!";
        $check=true;
    }
    else 
    {
        echo "Already have an account!!!<br>";
        echo $stmt->error;
    }
    $stmt->close();
    return $check;
  
 }

 function ShowAllAgent($conn,$table)
{
    $sql="select * from Agent_Reg";
    $result->$conn->query($sql);
    $result->fetch_all(MYSQLI_ASSOC);
    $result->free_result();
    return $result;
}

 function Search($conn,$table,$username)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username);
    return $result;
 }

 function Count($conn,$table,$Data)
 {
    $result = $conn->query("SELECT COUNT('Validation') FROM ". $table." WHERE Validation like False");
    return $result;
 } 

 function UpdateStatus($conn,$table,$Data)
 {
    $sql = "UPDATE $table SET Validation='$Data' WHERE Validation='False'";
    //$stmt->execute()
      if ($conn->query($sql) === TRUE) {
        
         $result= TRUE;
     } 
     else {
         $result= FALSE ;
         
     }
     return  $result;
 }




 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
return $result;
 }

 function ShowAllRequestedAgent($conn)
 {
$result = $conn->query("SELECT * FROM  agent_reg where Validation like 'False'");
return $result;
 }

///$conobj,"student",$_SESSION["Email"],$Name,$Email,$User,$Phone,$Address,$Var_Gender,$Date
 function UpdateUser($conn,$table,$Name,$Email,$User,$Phone,$Address,$Gender,$Date,$File)
 {
     $sql = "UPDATE $table SET FullName='$Name', UserName='$User',Phone='$Phone',Address='$Address',Gender='$Gender',Date='$Date',File_Path='$File' WHERE Email='$Email'";
   //$stmt->execute()
     if ($conn->query($sql) === TRUE) {
       
        $result= TRUE;
    } 
    else {
        $result= FALSE ;
        
    }
    return  $result;
 }

 function UpdateAgent($conn,$table,$Name,$Email,$User,$Phone,$Address,$Gender,$Date)
 {
    $sql = "UPDATE $table SET Name='$Name', Username='$User',Phone='$Phone',Address='$Address',Gender='$Gender',DOB='$Date' WHERE Email='$Email'";
    //$stmt->execute()
      if ($conn->query($sql) === TRUE) {
        
         $result= TRUE;
     } 
     else {
         $result= FALSE ;
         
     }
     return  $result;
 }

 function UpdateCustomer($conn,$table,$Name,$Email,$Phone,$Address,$Gender)
 {
    $sql = "UPDATE $table SET FullName='$Name',Phone='$Phone',Address='$Address',Gender='$Gender' WHERE Email='$Email'";
    //$stmt->execute()
      if ($conn->query($sql) === TRUE) {
        
         $result= TRUE;
     } 
     else {
         $result= FALSE ;
         
     }
     return  $result;
 }

 function UpdateSeller($conn,$table,$Name,$Email,$Phone,$Address,$Gender,$User)
 {
    $sql = "UPDATE $table SET name='$Name', phone='$Phone',address='$Address',gender='$Gender' WHERE username='$User' and email='$Email'";
    //$stmt->execute()
      if ($conn->query($sql) === TRUE) {
        
         $result= TRUE;
     } 
     else {
         $result= FALSE ;
         
     }
     return  $result;
 }

 function UpdateUserReq($conn,$table,$result,$Email)
 {
     $sql="UPDATE $table set Validation ='$result' where Email like '$Email'";
     if ($conn->query($sql) === TRUE) {
       
        $result= TRUE;
    } 
    else {
        $result= FALSE ;
        
    }
    return  $result;
 }

 function DeleteUserReq($conn,$table,$Email)
 {
     $sql="DELETE from $table where Email like '$Email'";
     if ($conn->query($sql) === TRUE) {
       
        $result= TRUE;
    } 
    else {
        $result= FALSE ;
        
    }
    return  $result;
 }


function CloseCon($conn)
 {
    $conn -> close();
 }
}
?>