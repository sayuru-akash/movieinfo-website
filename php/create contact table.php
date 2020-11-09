<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactData";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE contactForm (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
subject VARCHAR(100),
message VARCHAR(300) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table contactForm created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>