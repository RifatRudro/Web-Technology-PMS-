<?php   include "..\View\Registration.php";
        include "CustomerRegvalidation.php";
        include "..\Model\DatabaseConnection.php";
?>

<?php 
    $Name=$_REQUEST["fname"]; 
    $Email=$_REQUEST["email"]; 
    $Password=$_REQUEST["password"];
    $Phone=$_REQUEST["phone"];
    $Address=$_REQUEST["Address"];
    $Gender="";
if(isset($_REQUEST["gender"]))
{
    $Gender= $_REQUEST["gender"];



}

$target_File="../File/".$_FILES["fileupload"]["name"];

if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
{
    echo "You have uploadede a new file";
   #echo "br".$_FILES(["fileupload"]["type"]);
    #echo "<img src='".$target_File."'>";
}     

if($error==false)
{

    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $connection->InsertData($conobj,"Customer_reg",$Name,$Email,$Password,$Phone,$Address,$Gender,$target_File);
    $connection->CloseCon($conobj);

/*
    $formdata = array(
        'Name'=> "$Name",
        'Email'=> "$Email",
        'Password'=>"$Password",
        'Phone'=>"$Phone",
        'Address'=>"$Address",
        'Gender'=>"$Gender",
       
    
     );
    
    
     $existingdata = file_get_contents('../File/data.json');
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$formdata;
     
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
     
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
    }*/
} 
    

?>