<?php 

include "../control/AgentReqCount.php";

?>


<!DOCTYPE html>
<html>

<head>
<script src="../JavaScript/SearchAgent.js"> </script>
<link rel="stylesheet" type="text/css" href="../css/search.css">
</head>


<body>
<div class= "header sticky">
    <h1>Search Agent</h1> 
</div>


<div class="topnav">
<a href="Admin.php">Home </a>
<a href="../../Agent/view/AgentRegistration.php"> Add Agent</a> 
<a href="AgentList.php">Agent List</a> 
<a href="AgentReq.php">Agent Request <?php echo "<b>".$Count."</b>";?></a> 
</div>

<div>
Email: <input type="text" id="Email" name="Email" placeholder="Enter Email to Search" onkeyup="showmyuser()">
<p id="SearchResult"> </p>
</form>
<table border="1">

</table>
</form>
</div>
</body>
</html>


