<?php
  require_once('db.php');
  


    function insertProduct($product)
    {
    $conn=getConnection();
    $sql="INSERT INTO `product` (`P_name`, `P_Desc`, `P_Cate`, `P_Price`, `P_image`) 
    VALUES ('{$product['productName']}', '{$product['description']}', '{$product['category']}','{$product['price']}','{$product['photo']}')";

    if(mysqli_query($conn,$sql))
    {   
        return true;
    }
    else
    {
        return false;
    }
  }

  function updateProduct($product)
  {
  $conn=getConnection();

  $sql="UPDATE `product` set P_name='{$product['productName']}',P_Desc='{$product['description']}',P_Cate='{$product['category']}',P_Price='{$product['price']}' where P_ID='{$product['id']}'";

  if(mysqli_query($conn,$sql))
  {   
      return true;
  }
  else
  {
      return false;
  }
}

  function fetchProduct($id)
  {
      $conn = getConnection();
      $sql = "SELECT * FROM `product` WHERE `P_ID`='{$id}'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      return $row;
    
    }

  ?>