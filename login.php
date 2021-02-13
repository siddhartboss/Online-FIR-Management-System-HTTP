<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to database";

$name = $_POST['Name'];
$dob = $_POST['birthday'];
$gender = $_POST['Gender'];
$contact = $_POST['Contact'];
$email = $_POST['Email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$check = $_POST['agree'];

$sqlquery = "INSERT INTO registertable(name, dob, gender, contact, email, password, cpassword,agree) VALUES('$name','$dob', '$gender', '$contact','$email','$password','$cpassword', '$check')";

if($conn->query($sqlquery)==TRUE)
{
echo "sucess";
}
else
{
echo $conn->error;
}

?>
