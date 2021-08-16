<?php 
require_once('../model/db.php');
if (session_status() == PHP_SESSION_NONE) {
   session_start();
   }
   $conn = getConnection();

   if(isset($_POST['submit'])){
      print_r($_POST);
      $header = ($_POST['header']);
      $body = $_POST['body'];
      $id = $_POST['submit'];

      $sql="UPDATE `announcement` SET `header` = '$header', `body` = '$body' WHERE `announcement`.`id` =  '$id';";

      $result = mysqli_query($conn, $sql);
        echo($result);
        if ($result==1){
            $_SESSION['stat']="Edited Product";
            $_SESSION['stat_code']="success";
            header('location: ../view/index.php');
            
    }
  }
?>