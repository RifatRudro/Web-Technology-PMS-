<?php 
$user=$_SESSION['current_user'];
require_once('../controller/db.php');


if(isset($_POST['submit'])){
    echo("\n");
    print_r($_POST);

    $owner= $user['username'];
    $topic= $_POST['topic'];
    $message= $_POST['message'];

    $conn=getConnection();
    $sql="INSERT INTO `sms` (`owner_id`, `topic`, `message`) 
    VALUES ('{$owner}', '{$topic}', '{$message}')";
     if(mysqli_query($conn,$sql)){
      $_SESSION['stat']="Message Sent";
      $_SESSION['stat_code']="success";
      header('location: ../view/index.php');

      }
      else{
        $_SESSION['stat']="Not Sent";
        $_SESSION['stat_code']="error";
      }
    
}


?>