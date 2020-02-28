
<?php
// Logout process 

//start first
session_start();

// Destroying the session clears the $_SESSION variable
// OR when the browser is closed, this happens automatically
session_destroy();
header("Location: http://localhost:8080/login-request.php");

?>