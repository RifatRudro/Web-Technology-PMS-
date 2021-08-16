function get(id){
    return document.getElementById(id);
  }
 
function validateForm() {
    var hasError=false; 

    var propertyname= document.getElementById("propertyname").value;
    var propertydescription= document.getElementById("propertydescription").value;
    var propertycetegory=document.getElementById("propertycetegory").value; 
    var propertyprice=document.getElementById("propertyprice").value; 

   
   

    if (propertyname =="") {
        hasError=true; 
        document.getElementById("errorpropertyname").innerHTML="Please fill out Property Name Field";  
        }

    if (propertydescription.length<15) {
        hasError=true; 
        document.getElementById("errorpropertydescription").innerHTML="Property Description Length Must be filled 15 Charecters";  
        }

if(propertycetegory=="")
{
    hasError=true; 
    document.getElementById("errorpropertycetegory").innerHTML="Please fill out Property Category Field"; 
}

if(propertyprice=="")
{
    hasError=true; 
    document.getElementById("errorpropertyprice").innerHTML="Please fill out Property Price Field"; 
}

    
    return !hasError;
   
}