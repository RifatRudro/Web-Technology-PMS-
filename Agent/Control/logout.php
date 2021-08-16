<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ..\View\AgentLogin.php"); // Redirecting To Home Page
}
?>