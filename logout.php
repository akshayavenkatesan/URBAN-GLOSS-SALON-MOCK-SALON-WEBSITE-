<?php
session_start();
session_destroy();
echo "you have been logged out!";
header("refresh:5;url= http://localhost/ak/loginf.html"); /* Redirect browser */
exit();
?>


