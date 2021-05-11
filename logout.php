<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
//header_remove();
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>