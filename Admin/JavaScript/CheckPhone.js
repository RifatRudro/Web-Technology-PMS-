function CheckmyPhone(){
    var Phone = document.getElementById("phone").value;
var xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("errorphone").innerHTML =this.responseText;
                 //document.getElementById("CheckEmail").innerHTML ="Helllllloooooooooooooo";
               }
               else
               {
                   document.getElementById("errorphone").innerHTML = this.status;
               }
              
             
             };
             xhttp.open("POST", "../control/CheckPhone.php", true);
             xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
             xhttp.send("Phone="+Phone);
            }