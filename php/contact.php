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

<html>
	<head>
		<title>Contact Form Submission | Fantasy Movie</title>
		<link rel="stylesheet" type="text/css" href="../css/contactform.css">
		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
		<link href="../css/footer.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
		<div class="alignbox">
			<div class="statusreport">
			<h1>Contact Form Submission Status</h1><hr class="break">
			<p><?php echo $status; ?></p>
			</div>
			<div class="linkbutton">
			<a href="../index.html">Go Back To Home</a>
			</div>
		</div>
		
		<footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>Fantasy<span>Cinema</span></h3>
 
		<p class="footer-links">
		<a href="../index.html">Home</a>
	·
		<a href="../about.html">About</a>
	·
		<a href="../contact.html">Contact</a>
		</p>
 
		<p class="footer-company-name">fantasycinema &copy; 2020</p>
		</div>
 
		<div class="footer-center">
 
		<div>
		<i class="fa fa-map-marker"></i>
		<p><span>21 Revolution Street</span> Colombo, SriLanka</p>
		</div>
 
		<div>
		<i class="fa fa-phone"></i>
		<p>+94 077 1234567</p>
		</div>
 
		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:contact@fantasycinema.com">contact@fantasycinema.com</a></p>
		</div>
 
		</div>
 
		<div class="footer-right">
 
		<p class="footer-company-about">
		<span>About the company</span>
	Fantasy Cinema is a website to know about trending movies, tv-series  &amp; also you can stream the content you love from anywhere at anytime.
		</p>
 
		<div class="footer-icons">
 
		<a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
		<a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
		<a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a>
		<a href="https://github.com"><i class="fa fa-github"></i></a>
 
		</div>
 
		</div>
 
		</footer>
	</body>
</html>