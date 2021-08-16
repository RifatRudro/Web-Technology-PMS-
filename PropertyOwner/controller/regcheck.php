<?php 
require_once('../controller/owner.php');
require_once('../view/header.php');

if(isset($_POST['submit'])){

		$name =$_POST['name'];
		$username =$_POST['username'];
		$email =$_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		$repass = $_POST['password-repeat'];
        $gender= $_POST['gender'];

        $file_name= $_FILES['file']['name'];
        $file_type= $_FILES['file']['type'];
        $file_size= $_FILES['file']['size'];
        $file_tem_loc= $_FILES['file']['tmp_name'];
        $target_file = '../assets/OwnerPhotos/' . basename($username."_".$file_name);


        if (empty($file_name) or empty($file_type) or empty($file_size) or empty($file_tem_loc)  ){
            echo "no image uploaded";
           
         }
            else if($password != $repass){

				echo "password & confirm password mismatch...";
			}
            else{

                if (is_uploaded_file($_FILES['file']['tmp_name'])){
                    move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
                    $photo= $target_file;
                    $user = ['name'=> $name, 'username'=> $username, 'email'=>$email,'phone'=>$phone,'address'=>$address, 'password'=> $password, 'repass'=>$repass, 'gender'=>$gender, 'photo'=>$photo];
                    $status=insertUser($user);

                if($status)
                {	

                    $_SESSION['stat']="Registered in";
					$_SESSION['stat_code']="success";
                    header('location: ../view/login.php');

                }
                else
                {
				$_SESSION['stat']="Not Registered Succesfully";
				$_SESSION['stat_code']="error";
                    echo "Error";
                }}
                else{
                    echo "photo error";
                }
            }
        }


    

?>