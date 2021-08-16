function Checkmyuser(){
    var User = document.getElementById("username").value;
var xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("errorusername").innerHTML =this.responseText;
               }
               else
               {
                   document.getElementById("errorusername").innerHTML = this.status;
               }
              
             
             };
             xhttp.open("POST", "../control/CheckUsername.php", true);
             xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
             xhttp.send("Username="+User);
            }