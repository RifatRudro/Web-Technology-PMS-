<?php 
require_once('../controller/db.php');
require_once('../controller/product.php');
if (session_status() == PHP_SESSION_NONE) {
   session_start();
   }
   $conn = getConnection();

   if(isset($_POST['submit'])){
      $productName = $_POST['productName'];
      $description = $_POST['description'];
      $category = $_POST['category'];
      $price = $_POST['price'];


      $file_name= $_FILES['file']['name'];
      $file_type= $_FILES['file']['type'];
      $file_size= $_FILES['file']['size'];
      $file_tem_loc= $_FILES['file']['tmp_name'];
      $target_file = '../assets/Product Photos/' . basename($productName."_".$file_name);


      if (empty($file_name) or empty($file_type) or empty($file_size) or empty($file_tem_loc)  ){
        echo "no image uploaded";
       
     }  
     elseif(empty($productName) or empty($description) or empty ($category) or empty($price))
     {
       echo "some field is null";
     }
     else if(is_uploaded_file($_FILES['file']['tmp_name'])){
      move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
      $photo= $target_file;
      $product = ['productName'=> $productName, 'description'=> $description, 'category'=>$category,'price'=>$price, 'photo'=>$photo];
      
      print_r($product);
      if(insertProduct($product)){
            $_SESSION['stat']="Added Product";
            $_SESSION['stat_code']="success";
            header('location: ../view/viewProducts.php');
      }
      else{
        echo 'Error';
      }
    

  }
}
?>