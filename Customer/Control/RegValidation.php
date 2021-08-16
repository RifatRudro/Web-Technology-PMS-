<?php

$Name="";

$email="";
$Comment="";
$validatepassword="";
$validateconfirmpassword="";
$validatecomment="";
$validateradio=$ValidName=$validateemail=$ValidPhone="";
$validatecheckbox="";
$v1=$v2=$v3="";
$Password="";
$validFile="";
$validaddress="";
$target_File="";
$Error_Address="";
$User="";
///
$Var_Name=$Var_Email=$Var_Password=$Var_Code=$Var_Phone=$Var_address=$Var_Gender=$Var_File="";
$hasError=false;
$dbValidation=false;
///

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Name=$_REQUEST["name"]; 
$email=$_REQUEST["email"]; 
$Password=$_REQUEST["password"];
$ConfirmPassword=$_REQUEST["confirmpassword"];
$Phone=$_REQUEST["phone"];
$address=$_REQUEST["address"];

if(empty($Name) || strlen($Name)<6)
{
    $ValidName="Name Must contain 6 letter !!";
    $hasError=true;
}
if(is_numeric($Name))
{
    $ValidName="Name Can be numeric value";
}

else 
     $Var_Name=$Name;





if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="You Must Enter Valid Email";
    $hasError=true;
}
else{
    $Var_Email=$email;
}
///
$p=0;
if(strlen($Password)<8 || empty($Password))
{
    $validatepassword=" Password Must Contain 8 character!!";
    $hasError=true;
}
else if(ctype_lower($Password ))
		{
			if(ctype_upper($Password))
			{

			}
			else 
			{
				$validatepassword= "Password Must contain upper case and lower case";
                $hasError=true;
			}

		}

        else if(is_numeric($Password))
        {
            $validatepassword= "Password Must contain number-letter-special Character";
            $hasError=true;
        }
        else if (!str_contains($Password,'?')) {
			$hasError = true;
			$validatepassword= "Password Must contain ? and #";
			
		}
        else if (!str_contains($Password,'#')) {
			$hasError = true;
			$validatepassword= "Password Must contain ? and #";
			
		}
else{
    $Var_Password=$Password;
    $p=1;
    }

if(empty($ConfirmPassword))
{
    $validateconfirmpassword="Confirm Password Cannot be empty !!!";
    $hasError=true;
}

else if($ConfirmPassword != $Password)
{
    $validateconfirmpassword="Password and Confirm Password must match!!";
    $hasError=true;
}

if($p==1)
{
   # $validateconfirmpassword=$ConfirmPassword;
}


///new code

if(!empty($_POST['code']))///country code
 {
    $selected = $_POST['code'];
    $Var_Code=$selected;
} else {
    $ValidCode="Country Code Must Required";
    $hasError=true;
}

if(empty($Phone))
{
    $ValidPhone="Phone Must Required !!";
    $hasError=true;
}


else if(!is_numeric($Phone ))
{
    $hasError=true;
    $ValidPhone="Phone must be numeric number ";
    $hasError=true;

}
else 
{
    $Var_Phone=$Phone;
}

if(isset($_REQUEST["gender"]))
{
    $validateradio=$_REQUEST["gender"];
}
else{
    $validateradio= " Please Select Your Gender";
    $hasError=true;
}

if($address=="")
{
    $Error_Address="Address Must Required!!";
}



//$target_File="../File/".$_FILES["fileupload"]["name"];
/*
if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
{
    echo "You have uploadede a new file";
   #echo "br".$_FILES(["fileupload"]["type"]);
    #echo "<img src='".$target_File."'>";
}
else 
    $validFile= "Sorry ,You must upload a file to continue";
*/
if($hasError==false)
{
    $dbValidation=true;
}


}
 ?>
