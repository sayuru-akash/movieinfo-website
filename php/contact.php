<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactData";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//Insert data
$sql = "INSERT INTO contactForm (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if (mysqli_query($conn, $sql)) {
  $status = "SUCCESS!!";
} else {
  $status = "ERROR!: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>