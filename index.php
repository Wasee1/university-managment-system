
<?php

error_reporting(0);
session_start();
session_destroy();


if ($_SESSION['message'])
{
	$message=$_SESSION['message'];

	echo "<script type='text/javascript'> 

	alert('$message');




	</script>";
}


?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<nav>
	
	<label class="logo">University Of Vavuniya</label>

	<ul>
		<li><a href="">Home</a></li>
		<li><a href="">Contect</a></li>
		<li><a href="">Admission</a></li>
		<li><a href="login.php" class="btn btn-success">Login</a></li>
	</ul>
</nav>

<div class="section1">
	
	<img class="main_img" src="p1.jpeg">
</div>

<div class="container">

	<div class="row">

		<div class="col-md-4">

			<img class="welcome_img" src="p3.jpeg">

			
		</div>

		<div class="col-md-8"> 
			<h1>Welcome to University Of Vavuniya</h1>
			<p>Welcome to the University of Vavuniya, where knowledge meets innovation in the heart of Sri Lanka.
We are dedicated to fostering academic excellence and nurturing future leaders across diverse fields.
Join our vibrant community and experience world-class education, research, and personal growth.
Explore cutting-edge programs designed to empower students with skills for a dynamic global landscape.At the University of Vavuniya, your journey to success begins with us.</p>
		</div>
		
	</div>
	
</div>


<center>
	<h1>Our Facilities</h1>
</center>

<div class="container">

<div class="row">
	<div class="col-md-4">
		<img class="teacher" src="p4.jpg">
		<p>The University of Vavuniya offers modern, well-equipped lecture rooms with advanced audiovisual systems and ergonomic seating for an interactive learning experience.</p>
	</div>

	<div  class="col-md-4">
		<img class="teacher" src="p6.jpg">
		<p>Our university library provides a comprehensive collection of books, research papers, and digital resources in a quiet, modern space designed for both individual study and group discussions.</p>
	</div>

	<div class="col-md-4">
		<img class="teacher" src="p5.jpg">
	
	<p>The University of Vavuniya features a vibrant, eco-friendly campus with lush gardens and recreational spaces, creating a serene environment that enhances student well-being and enriches campus life.</p>
	 </div>
</div>
</div>


<center>
	<h1>Our Courses </h1>
</center>

<div class="container">

<div class="row">
	<div class="col-md-4">
		<img class="teacher" src="p8.jpg">
		<h2>Computer Science</h2>
		
	</div>

	<div  class="col-md-4">
		<img class="teacher" src="p9.jpg">
		<h2>Information Technology</h2>
	</div>

	<div class="col-md-4">
		<img class="teacher" src="p10.jpg">
	    <h2>Enviroment Science</h2>
	
	 </div>
</div>
</div>


<center>
	<h1 class="adm">Registration Form</h1>
</center>
<div align="center" class="admission_form">
	<form action="data_check.php" method="POST">
		<div class="adm_int">
			<label class="label_text">Name:</label>
			<input class="input_deg" type="text" name="name">
		</div>

		<div class="adm_int" >
			<label class="label_text">Email:</label>
			<input class="input_deg"  type="text" name="email">
		</div>
		<div class="adm_int" >
			<label class="label_text">Phone:</label>
			<input class="input_deg" type="text" name="phone">
		</div>
		
		<div class="adm_int" > 
			<label class="label_text">Message:</label>
			<textarea class="input_txt" name="message"></textarea>
		</div>
		<div class="adm_int" > 
			<input class="btn btn-primary"  id="submit" type="submit" value="apply" name="apply">
		</div>
	</form>
	
</div>

<footer>
	<h3 class="footer_text">All @copyright reserved by web tech knowledge </h3>
</footer>



</body>
</html>