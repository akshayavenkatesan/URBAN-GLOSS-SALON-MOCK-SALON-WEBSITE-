<?php
error_reporting(E_ALL ^ E_WARNING);

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO signupf
VALUES ('$_POST[uname]','$_POST[email]','$_POST[password]')";



if ($conn->query($sql) === TRUE) 
{ $_SESSION["user"]=$_POST[uname];
        echo "welcome ".$_SESSION["user"];
        header("refresh:3;url= http://localhost/ak/salon.html");
        exit();  
    
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>