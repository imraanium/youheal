
<?php
$servername = "localhost";
$username = "sm3513";
$password = "M00732155";
$dbname= "youheal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
