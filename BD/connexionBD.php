<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cv_nomale";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>