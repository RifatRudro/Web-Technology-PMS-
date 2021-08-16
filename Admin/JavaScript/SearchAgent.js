
function showmyuser() {
    var email = document.getElementById("Email").value;



    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("SearchResult").innerHTML =this.responseText;
        }
        else
        {
            document.getElementById("SearchResult").innerHTML = this.status;
        }
       
      
      };
      xhttp.open("POST", "../control/AgentSearchValidation.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("Email="+email);
      
      






}