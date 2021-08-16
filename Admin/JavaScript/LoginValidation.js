function validateForm() {
    var password = document.getElementById("password").value;
    var email = document.getElementById("Email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
   var flag1=flag2=0;
    if(!res)
    {
      document.getElementById("errormail").innerHTML="Email format is not correct";
      //return false; 
    }
    else
    {
      document.getElementById("errormail").innerHTML="";
     
    }
  
   if (password.length<6 ) 
   {
     document.getElementById("errorpass").innerHTML="Password contains 6 char";
      return false;
    }
    else 
    {
      document.getElementById("errorpass").innerHTML="";
    }
  
  
  }
  