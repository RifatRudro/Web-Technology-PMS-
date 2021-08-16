
function showproperty() {
    var Pname=  document.getElementById("pname").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
  
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("mytext").innerHTML = this.responseText;
      }
      else
      {
           document.getElementById("mytext").innerHTML = this.status;
      }
    };
    xhttp.open("POST", "../control/SearchValidation.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("pname="+Pname);
  
  
  }