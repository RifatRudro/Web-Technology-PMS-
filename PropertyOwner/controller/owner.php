<?php
  require_once('db.php');
  function getUserbyId($id)
  {
      $conn = getConnection();
      $sql = "SELECT * FROM `owner` WHERE `email`='{$id}'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      return $row;
  }

  function validateUser($username,$password)
  {     
        $conn=getConnection();
        $sql = "select * from owner where email='{$username}' and password='{$password}'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return true;
          }
          else{
            return false;
          }
  }

  function insertUser($user)
  {print_r($user);
    $conn=getConnection();
    $sql="INSERT INTO `owner` (`name`, `username`, `email`, `phone`, `address`, `password`, `gender`, `photo`) VALUES 
    ('{$user['name']}','{$user['username']}','{$user['email']}','{$user['phone']}','{$user['address']}','{$user['password']}','{$user['gender']}','{$user['photo']}')";
    
    if(mysqli_query($conn,$sql)){
      return true;
    }
    else{
      return false;
    }

  }

  ?>