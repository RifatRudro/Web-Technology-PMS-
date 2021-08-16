
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
    var name = document.getElementById("name").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confPassword = document.getElementById("confPassword").value;
    var phone = document.getElementById("phone").value;
    var street = document.getElementById("street").value;

    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
    var postal = document.getElementById("postal").value;
    var date = document.getElementById("date").value;
   // var street = document.getElementById("street").value;
     patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);

    if(name=="")
    {
        document.getElementById("errorname").innerHTML="Name must required !";
        //return false; 
    }
    else{
        document.getElementById("errorname").innerHTML="";
    }

    if(!res)
    {
      document.getElementById("erroremail").innerHTML="Email format is not correct";
     // return false; 
    }
    else
    {
      document.getElementById("erroremail").innerHTML="";
     
    }
    if(username=="")
    {
        document.getElementById("errorusername").innerHTML="Username must required !";
        //return false; 
    }
    else{
        document.getElementById("errorusername").innerHTML="";
    }
  
   if (password.length<6 ) 
   {
     document.getElementById("errorpass").innerHTML="Password contains 6 char";
     // return false;
    }
    else 
    {
      document.getElementById("errorpass").innerHTML="";
    }

    if (confPassword.length<6 ) 
    {
      document.getElementById("errorconfPass").innerHTML="Password contains 6 char";
       //return false;
     }
     else 
     {
       document.getElementById("errorconfPass").innerHTML="";
     }

     if (phone.length<11 ) 
     {
       document.getElementById("errorphone").innerHTML="Phone number must contain 11 number";
       // return false;
      }
      else 
      {
        document.getElementById("errorphone").innerHTML="";
      }

      if (street=="") 
      {
        document.getElementById("errorstreet").innerHTML="street can not be empty";
        //return false;
       }
       else 
       {
         document.getElementById("errorstreet").innerHTML="";
       }

       if (city=="" ) 
       {
         document.getElementById("errorcity").innerHTML="city can not be empty";
         // return false;
        }
        else 
        {
          document.getElementById("errorcity").innerHTML="";
        }

        if (state=="" ) 
        {
          document.getElementById("errorstate").innerHTML="state can not be empty";
          // return false;
         }
         else 
         {
           document.getElementById("errorstate").innerHTML="";
         }

         if (postal=="" ) 
         {
           document.getElementById("errorpostal").innerHTML="postal can not be empty";
            //return false;
          }
          else 
          {
            document.getElementById("errorpostal").innerHTML="";
          }


           if(validateGen()==false)
           {
             document.getElementById("errorgender").innerHTML="Gender must requried";
             return false;
           }
           else{
            document.getElementById("errorgender").innerHTML="";
           }

  
  
  }
  