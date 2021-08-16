<?php 
require_once('owner.php');
require_once('../view/header.php');

if(isset($_POST['submit'])){

    $username = $_POST['email'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        echo "null input...";
    }else{

        $status= validateUser($username, $password);

        if($status)
        {
           $_SESSION['flag']=true;
           $user=getUserbyId($username);
           $_SESSION['current_user'] = $user;
           $_SESSION['stat']="Logged in";
            $_SESSION['stat_code']="success";
            
            header('location: ../view/index.php');
        }
        else
        {	
            $_SESSION['stat']="Not logged in Succesfully";
            $_SESSION['stat_code']="error";
            header('location: ../view/login.php');

        }
    }
}
?>