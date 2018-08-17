
<?php
error_reporting(E_ALL ^ E_WARNING);
 echo " YOUR INPUT WAS TAKEN !!<br>";
 echo "First Name  :{$_POST["firstname"]}<br>" ;
 echo "Last Name  :{$_POST["lastname"]}<br>";
 echo "phone number  :{$_POST["phonenumber"]}<br>";
 echo "Email :{$_POST["email"]}<br>";
 echo "Branch  :{$_POST["BRANCH"]}<br>";
 echo "HAVE YOU VISITED OUR SALON BEFORE? :{$_POST["question"]}<br>";
 echo "Date of Appointment  :{$_POST["bday"]}<br>";
 echo "Session   :{$_POST["dob_month"]}<br>";
 echo "Service   :{$_POST["service"]}<br>";

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
 
$sql = "INSERT INTO login 
 VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[phonenumber]','$_POST[email]','$_POST[BRANCH]','$_POST[question]','$_POST[bday]','$_POST[dob_month]','$_POST[service]')";
 
if ($conn->query($sql) === TRUE)
 {
    echo "New record created successfully";
}
 else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
if($_POST[service]=== "hair") {
header("refresh:5;url= http://localhost/ak/hair.html"); /* Redirect browser */
exit();
}
else if($_POST[service]=== "skin") {
header("refresh:5;url= http://localhost/ak/skin.html"); /* Redirect browser */
exit();
}
else if($_POST[service]=== "body") {
header("refresh:5;url= http://localhost/ak/body.html"); /* Redirect browser */
exit();
}
?>
<?php
include('quest.php');
$quest="SELECT * FROM question";
$data=mysqli_query($conn,$quest) or die('error');
while($row=mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
    echo $row['quest'];
}
?>

