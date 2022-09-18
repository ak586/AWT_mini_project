<?php 

$servername = "localhost";
$username = "ajit";
$password = "pass";
$dbname = "AWT";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo"khjkjh";
    die("Connection failed: " . $conn->connect_error);
    
  }
?>