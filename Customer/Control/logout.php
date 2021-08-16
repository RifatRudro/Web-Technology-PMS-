<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ..\View\Login.php"); // Redirecting To Home Page
}
?>