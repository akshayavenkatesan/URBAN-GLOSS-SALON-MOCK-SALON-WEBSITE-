<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

if($_SERVER["REQUEST_METHOD"] == "POST") 
     {
      // username and password sent from form 

      $un=$_POST["username"];
      $pw=$_POST["password"];
     
      $sql = "SELECT * FROM signupf WHERE username='$un' and password='$pw'";
      $result = mysqli_query($conn,$sql);
     // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $un and $pw, table row must be 1 row
		
      if($count!=1) 
      { 
       echo "Invalid username or password!";
        header("refresh:3;url= http://localhost/ak/signup.html");
        exit();
      }
      else 
      { $_SESSION["user"]=$un;
        echo "welcome ".$_SESSION["user"];
        header("refresh:3;url= http://localhost/ak/salon.html");
        exit();
      }
   }
?>
