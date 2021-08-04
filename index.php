<?php
include "connection.php";
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
			<li><a href="">HOME</a></li>
			<li><a href="product.php">CAKES</a></li>
			<li><a href="sides.php">SIDES</a></li>
			<li><a href="#contact">CONTACT</a></li>
			<li><a href="account.php">LOGIN</a></li>
		</ul>
	</nav>
	<a href="cart.php"><img src="https://cdn4.iconfinder.com/data/icons/essential-elements-1/100/shopping-cart-512.png" width="30px" height="30px"></a>
	<img src="https://cdn4.iconfinder.com/data/icons/mobile-app-navigation-line-style/32/Hamburger_Menu-512.png" height="30px" class="menu-icon" onclick="menutoggle()">
	</div>
	<div class="row">
		<div class="col-2">
			<h1>Tempting Cake<br>Happiness in every Bite!!</h1>
			<p>we will cater the happiness<br>right to your doorstep! </p>
			<a href="product.php" class="btn">EXPLORE NOW &#8594</a>
		</div>
		<div class="col-2">
			<img src="home.jpeg">
		</div>
	</div>
</div>
</div>
<!---featured categoreies----->
<div class="categories">
	<div class="small-container">
		<div class="row">
		<div class="col-3">
			<img src="buns.jpeg">
		</div>

		<div class="col-3">
			<img src="cake2.jpeg">
		</div>
		<div class="col-3">
			<img src="cake9.jpeg">
		</div>
	</div>
</div>
	
</div>
<!---featured products----->
<div class="small-container">
	<h2 class="title">KIDS CHOICE</h2>
	<div class="row">
		<div class="col-4">
			<img src="cake10.jpeg" width="100px" height='310px'>
			<h4>Unicorn Cake</h4>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<p>price Rs. 250.00</p>
		</div>
		<div class="col-4">
			<img src="cake11.jpeg">
			<h4>Bowling Cake</h4>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<p>price Rs. 350.00</p>
		</div>
		<div class="col-4">
			<img src="cake12.jpeg" width="100px" height='310px'>
			<h4>Barbie Cake</h4>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<p>price Rs. 550.00</p>
		</div>
		<div class="col-4">
			<img src="cake13.jpeg">
			<h4>Peppa Pig Cake</h4>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<p>price Rs. 300.00</p>
		</div>
	</div>
	<h2 class="title">BEST SELLERS</h2>
	<div class="row">
		<div class="col-4">
			<img src="cake3.jpeg" height="313px" width="283px">
			<h4>Marbel vanilla cake</h4>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<p>price Rs. 500.00</p>
		</div>
		<div class="col-4">
			<img src="cake14.jpeg" height="313px" width="283px">
			<h4>chocolate vanilla cake</h4>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<p>price Rs. 300.00</p>
		</div>
		<div class="col-4">
			<img src="cake15.jpeg" height="313px" width="283px">
			<h4>Fudge Brownie cAKE</h4>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<p>price Rs. 250.00</p>
		</div>
		<div class="col-4">
			<img src="cake4.jpeg" height="313px" width="283px">
			<h4>chocolate almond cupcake</h4>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<p>price Rs. 200.00</p>
		</div>
	</div><div class="row">
		<div class="col-4">
			<img src="cake16.jpeg" height="313px" width="283px">
			<h4>Excotic ButterScotch Cake</h4>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<p>price Rs. 350.00</p>
		</div>
		<div class="col-4">
			<img src="cake17.jpeg" height="313px" width="283px">
			<h4>Banana Smiley Cake</h4>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<p>price Rs. 400.00</p>
		</div>
		<div class="col-4">
			<img src="cake18.jpeg" height="313px" width="283px">
			<h4>Chocolate Truffle Cake</h4>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<p>price Rs 250.00</p>
		</div>
		<div class="col-4">
			<img src="cake19.jpeg" height="313px" width="283px">
			<h4>PineApple Fresh Fruit Cake</h4>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<p>price Rs. 350.00</p>
		</div>
	</div>
</div>
<!-----offer------>
<div class="offer">
<div class="small-container">
	<div class="row">
	<div class="col-2">
		<img src="cake5.jpeg" class="offer-img">
	</div>
	<div class="col-2">
		<p>“Birthdays are nature’s way of telling us to eat more cake”</p>
		<h1>Cuppies</h1>
		<small>Baked with Care.Now available Online</small>
		<a href="product.php" class="btn">BUY NOW &#8594;</a>
	</div>
	
</div></div></div>

<!----testiomoninal------>
<div class="test"><div class="small-container">
	<div class="row">
		<div class="col-3">
			<i class="fa fa-quote-left"></i>
			<p>The cake was tasty, fresh & delicious. Very quick services. Delivered before time and made my surprise more valuable</p>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<img src="user.png">
			<h3>Amritha Patil</h3>
		</div>
		<div class="col-3">
			<i class="fa fa-quote-left"></i>
			<p>Very much delighted with your service. We enjoyed the delicious cake and celebrated the birthday of my friend.</p>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9734;
			</div>
			<img src="user2.png">
			<h3>Maya Murthy</h3>
		</div>
		<div class="col-3">
			<i class="fa fa-quote-left"></i>
			<p>I ordered a cake for my anniversary celebration. They Delivered cake on fix time and cake was really fantastic.</p>
			<div class="rating">
				 &#9733; &#9733; &#9733; &#9733;&#9733;
			</div>
			<img src="user3.png">
			<h3>Varsha Kanan</h3>
		</div>
	</div>
</div></div>
<!-----footer----->
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
		<p>
	</div>
</div>
<!----toggle menu--->
<script type="text/javascript">
	var menuitems=document.getElementById("menuitems");
	menuitems.style.maxHeight="0px";
	function menutoggle(){
		if(menuitems.style.maxHeight=="0px"){
			menuitems.style.maxHeight="200px";
		}
		else{
			menuitems.style.maxHeight="0px"
		}
	}
</script>
</body>
</html>
