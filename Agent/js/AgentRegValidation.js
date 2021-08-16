function get(id){
    return document.getElementById(id);
  }
  
  function validateGen(){
    var gn = document.getElementsByName("gender");
    var checked = false;
    for(var i=0;i<gn.length;i++){
        if(gn[i].checked){
            checked = true;
            break;
        }
    }
    return checked;
  }

function validateForm() {
    var hasError=false; 
    var name = document.getElementById("name").value;
    var email= document.getElementById("email").value;
    var username= document.getElementById("username").value;
    var password= document.getElementById("password").value;
    var cpassword= document.getElementById("cpassword").value;
   

    var Phone= document.getElementById("phone").value;
    
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
  
     
    if (name =="") {
    hasError=true; 
    document.getElementById("errorname").innerHTML="Please fill out Name";  
    }

    if(!res)
    {
    //hasError=true; 
    document.getElementById("erroremail").innerHTML="Please Fill out Email";
    }

    if (username =="") {
        hasError=true; 
        document.getElementById("errorusername").innerHTML="Please fill out UserName";  
        }

    if (password.length<6) {
        hasError=true; 
        document.getElementById("errorpassword").innerHTML="Password Must be 6 Charcecter";  
        }
    
    if (cpassword.length<6) {
            hasError=true; 
            document.getElementById("errorcpassword").innerHTML="Password Must Matched by Password";  
    }
    
    if (Phone=="") 
    {
        hasError=true; 
        document.getElementById("errorphone").innerHTML="Phone Number Must filled";  
    }

    if(validateGen()==false)
    {
      document.getElementById("errorgen").innerHTML="Gender must requried";
      return false;
    }
    
    if(!get("PA") && !get("RA") && !get("AA")){
        hasError=true;
        document.getElementById("errortype").innerHTML="At Least One Type must requried";
    }
    
    return !hasError;
   
}
