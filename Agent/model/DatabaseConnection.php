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
 function CheckUser($conn,$table,$username,$password,$True)
 {
   $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."' AND Validation like '". $True ."'" );
  
   if($result-> num_rows > 0)
  {
      echo "Log in Done";
  }
  else
  {
      echo "Log in failed "; 
  }
  
  
  
  
   return $result;
 }

 function InsertData($conn,$table,$Name,$email,$username,$Password,$Phone,$Address,$Date,$validateradio,$validcheckbox,$target_File,$validation)
 {
     $stmt = $conn-> prepare("INSERT INTO agent_reg (Name, Email, Username, Password, Phone, Address, DOB, Gender,Agent_Type, File_Path,Validation) VALUES (?,?,?,?,?,?,?,?,?,?,?)"); 
     $stmt -> bind_param("sssssssssss",$Name,$email,$username,$Password,$Phone,$Address,$Date,$validateradio,$validcheckbox,$target_File,$validation); 
    
     if($stmt->execute())
    {
        echo "Agent Data Saved In Database"; 
    }
    else
    {
        echo "Already Account exixt <br>" ; 
        echo $stmt->error; 
    }
     $stmt->Close(); 
     
 }

 function ShowData($conn,$table,$Email,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $Email."' AND Username='". $User."'");
    return $result;
}

function CheckValidation($conn,$table,$User,$Password)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Username='". $User."' AND Password='". $Password."'");
    return $result;
}





function ShowData2($conn,$table,$Pname)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE P_Name like '". $Pname."%' ");
    return $result;
    
}



function AddProperty($conn,$table,$pname,$pdesc,$pcate,$pprice,$pimage)
{
$result = $conn->query("INSERT INTO $table VALUES('','$pname','$pdesc','$pcate',$pprice,'$pimage')");
return $result;
}

 function ShowAll($conn,$table)
 {
  $result = $conn->query("SELECT * FROM  $table");
  return $result;
 }
 
 function UpdateUser($conn,$table,$Name,$Email,$User,$Phone,$Address,$Gender,$Date)
 {
     $sql = "UPDATE $table SET Name='$Name', Username='$User',Phone='$Phone',Address='$Address',Gender='$Gender',DOB='$Date' WHERE Email='$Email'";
     if ($conn->query($sql) === TRUE) {

        $result= TRUE;
    } 
    else {
        $result= FALSE ;

    }
    return  $result;
 }

 function deleteuser($conn,$table,$User)
 {
     $sql="Delete from $table WHERE Username like '".$User."'"; 
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