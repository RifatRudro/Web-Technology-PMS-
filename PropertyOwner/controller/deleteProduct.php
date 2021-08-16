<?php ;
require_once('../controller/db.php');
$conn = getConnection();
	
$id= $_GET['id'];

      
        $sql="DELETE FROM `product` WHERE `P_ID` LIKE '{$id}';";
        $result = mysqli_query($conn, $sql);
        if ($result=1){
            echo "deleted <br>";
            header('location: ../view/updateProducts.php');
            $_SESSION['stat']="Deleted";
            $_SESSION['stat_code']="error";
        }
        else{
            echo "error";
        }
            


?>