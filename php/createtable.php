<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movieSubmission";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE newMovies (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
year INT NOT NULL,
genre VARCHAR(50) NOT NULL,
description VARCHAR(300) NOT NULL,
poster VARCHAR(200) NOT NULL,
email VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table newMovies created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>