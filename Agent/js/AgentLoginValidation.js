function get(id){
    return document.getElementById(id);
  }
 
function validateForm() {
    var hasError=false; 

    var username= document.getElementById("username").value;
    var password= document.getElementById("password").value;
   
   

    if (username =="") {
        hasError=true; 
        document.getElementById("errorusername").innerHTML="Please fill out UserName Field";  
        }

    if (password.length<6) {
        hasError=true; 
        document.getElementById("errorpasword").innerHTML="Password Must be 6 Charcecter";  
        }

    
    return !hasError;
   
}


