<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movieSubmission";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$result = mysqli_query($conn,"SELECT * FROM newMovies ORDER BY id DESC LIMIT 1");

while($row = mysqli_fetch_array($result))
{

$name=$row['name'];
$year=$row['year'];
$genre=$row['genre'];
$description=$row['description'];
$poster=$row['poster'];
$email=$row['email'];

$image = $row['poster'];
$image_src = "../php/upload/".$image;
}

mysqli_close($conn);

?>

<html lang="en">
<head>
	<meta charset="utf-8">
<title><?php echo $name; ?> | Fantasy Cinema</title>
	<link href="../css/movieout.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
	<link href="../css/footer.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div class="alignbox">
	<header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="../index.html" class="navbar-brand text-uppercase font-weight-bold"><img src="../images/logo2.jpg" alt="logo"></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="../index.html" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="../about.html" class="nav-link text-uppercase font-weight-bold">About</a></li>
                        <li class="nav-item"><a href="../contact.html" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
						<li class="nav-item"><a href="../movie submit.html" class="nav-link text-uppercase font-weight-bold">Submit a Movie</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	
	<div class="render">
		<div class="posterdiv">
			<img src='<?php echo $image_src; ?>' alt="poster">
		</div>
		<div class="datadiv">
			<div class="maindata">
				<h1><?php echo $name; ?></h1>
			</div>
			<div class="subdata">
				<p>(<?php echo $year; ?>) | <?php echo $genre; ?></p>
				<hr class="division"><br>
				<span>Synopsis:</span>
				<p><?php echo $description; ?></p>
			</div>
			<div class="personaldata">
				<p>Submitted by user: <?php echo $email; ?></p>
			</div>
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
		</div>
	<script>
			$(function () {
			$(window).on('scroll', function () {
				if ( $(window).scrollTop() > 10 ) {
					$('.navbar').addClass('active');
				} else {
					$('.navbar').removeClass('active');
				}
			});
		});
	</script>
</body>
</html>
