<?php
$servername = "mysql_db";
$username = "root";
$password = "root";
$database = "webbansach";
$port = 3306;
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
mysqli_set_charset($conn, "utf8");

// Check connection
if ($conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
  exit();
}
echo "Connected successfully";
?>