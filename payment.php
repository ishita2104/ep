<?php 
	include "connection.php";
	$value="cake10";
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="view-port" content="width=device-width,initial-scale=1.0">
	<title>CUPPIES</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
	<div class="container">
		<div class="navbar">
			<div class="logo">
				<img src="logo.jpeg" width="125px">
		</div>
	<nav>
		<ul id="menuitems">
			<li><a href="index.html">HOME</a></li>
			<li><a href="product.html">CAKES</a></li>
			<li><a href="sides.html">SIDES</a></li>
			<li><a href="#contact">CONTACT</a></li>
			<li><a href="account.php">LOGIN</a></li>
		</ul>
	</nav>
	<a href="cart.html"><img src="https://cdn4.iconfinder.com/data/icons/essential-elements-1/100/shopping-cart-512.png" width="30px" height="30px"></a>
	<img src="https://cdn4.iconfinder.com/data/icons/mobile-app-navigation-line-style/32/Hamburger_Menu-512.png" height="30px" class="menu-icon" onclick="menutoggle()">
	</div>

	<form method="post" action="">
		<input type="" name="">
		
	</form>

	<br>
	<br>
	<div class="footer" id="contact">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Cuppies</h3>
				<p>Now Online</p>
			</div>
			<div class="footer-col-2">
				<img src="logo.jpeg">
				
			</div>
			<div class="footer-col-3">
				<b>timings:</b><br>
				 08:00 to 18:30 Hrs.<br>
				 <b>Call Us:</b><br>
				 96823958959<br>
				 <b>Email</b><br>
				 <a href="mailto:mahaz960@gmail.com">mahaz960@gmail.com</a>
			</div>
			<div class="footer-col-4">
				<h3>DELIVERY AVAILABLE:</h3>
				<ul>
				<li>kamanahalli</li>
				<li>babuspalya</li>
				<li>henur</li>
				<li>kalyan nagar</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="copyright">cuppies website</p>
	
	</div>
</div>