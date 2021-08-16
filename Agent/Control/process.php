<?php   include "..\View\AgentRegistration.php" ; ?>
<?php   include "AgentRegValidation.php" ; ?>
<?php   include "..\model\DatabaseConnection.php"; ?>


<?php 
$v1="";
$v2="";
$v3="";
$validateradio="";
$validatecheckbox="";
$Name=$_REQUEST["name"]; 
$Email=$_REQUEST["email"]; 
$Password=$_REQUEST["password"];
$Phone=$_REQUEST["phone"];
$Street=$_REQUEST["street"];
$City=$_REQUEST["city"];
$Postal=$_REQUEST["postal"];
$User=$_REQUEST["Username"];
$Address=$_Street.','.$_City.','.$_Postal;
$Date = date('Y-m-d', strtotime($_POST['birthday']));


if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}

    if(isset($_REQUEST["PA"]))
    {
        $v1= $_REQUEST["PA"];
       
    }
    if(isset($_REQUEST["RA"]))
    { 
        $v2= $_REQUEST["RA"];
      
    }
    if(isset($_REQUEST["AA"]))
    {
     $v3= $_REQUEST["AA"];
     
    }
    $validatecheckbox= $v1.$v2.$v3; 


if($Error==false)
{

    $validation="false"; 
    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $connection->InsertData($conobj,"agent_reg",$Name,$Email,$User,$Password,$Phone,$Address,$Date,$validateradio,$validatecheckbox, $target_File, $validation);
    $connection->CloseCon($conobj);

    /*
    $formdata = array(
        'Name'=> "$Name",
        'Email'=> "$Email",
        'Username'=> "$User",
        'Password'=>"$Password",
        'Phone'=>"$Phone",
        'Address'=>"$Street , $City,$Postal",
        'Gender'=>"$validateradio",
        'DOB'=>"$Date",
        'Agent_Type'=>"$v1,$v2,$v3",
       
    
     );
    
    
     $existingdata = file_get_contents('../File/data.json');
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$formdata;
     //Convert updated array to JSON
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
     //write json data into data.json file
     if(file_put_contents("../File/data.json", $jsondata)) {
          echo "Data successfully saved <br>";
      }
     else 
          echo "no data saved";
    
    $data = file_get_contents("../File/data.json");
    $mydata = json_decode($data);
    
    
    foreach($mydata as $myobject)
    {
    foreach($myobject as $key=>$value)
    {
      echo "your ".$key." is ".$value."<br>";
    } 
    echo "<br>";
    }
    
 */   
}
}


?>

