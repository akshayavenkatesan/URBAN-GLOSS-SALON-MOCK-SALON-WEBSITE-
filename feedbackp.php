<?php
echo " YOUR INPUT WAS TAKEN !!<br>";
echo "salon ambience :{$_POST["a1"]}<br>";
echo "quality of service  :{$_POST["a2"]}<br>";
echo "personal satisfaction  :{$_POST["a3"]}<br>";
echo "was booking appointment easy? :{$_POST["a4"]}<br>";
echo "worth your money?  :{$_POST["a5"]}<br>";



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
 
$sql = "INSERT INTO feedback
 VALUES('$_POST[a1]','$_POST[a2]','$_POST[a3]','$_POST[a4]','$_POST[a5]')";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 


	