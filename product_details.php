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
			<li><a href="index.php">HOME</a></li>
			<li><a href="product.php">CAKES</a></li>
			<li><a href="sides.php">SIDES</a></li>
			<li><a href="#contact">CONTACT</a></li>
			<li><a href="account.php">LOGIN</a></li>
		</ul>
	</nav>
	<a href="cart.php"><img src="https://cdn4.iconfinder.com/data/icons/essential-elements-1/100/shopping-cart-512.png" width="30px" height="30px"></a>
	<img src="https://cdn4.iconfinder.com/data/icons/mobile-app-navigation-line-style/32/Hamburger_Menu-512.png" height="30px" class="menu-icon" onclick="menutoggle()">
	</div>

	<!----------------------single product details------------------------->
	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="cake10.jpeg" width="80%" height="50%" id="productImg">
				<h3>Product Details <i class="fa fa-ident"></i></h3>
				<p>Cake Flavour- Chocolate<br>Serves- 4-6 People</p>
				<p>The cake stand, cutlery & accessories used in the image are only for representation purposes.They are not delivered with the cake.<br>This cake is hand delivered in a good quality cardboard box.<br>Country of Origin: India</p>

			</div>
			<div class="col-2">
				<h2>Unicorn Cake</h2>
				
				<h4>Rs. 250.00</h4>
				<form method="post" action="">
					<input style="width: 50%" type="text" name="username" value="" placeholder="Username">
					
					<select name="quantity">
						<option selected hidden>SELECT QUANTITY</option>
								<option value="1kg">1 KG</option>
								<option value="1.5kg">1.5 KG</option>
								<option value="2kg">2 KG</option>
								<option value="2.5kg">2.5 KG</option>
					</select>
					<input style="width: 60%" type="text" name="cake_name" value="Unicorn Cake"><br>
					<input style="width: 40%" type="number" id="a0" onblur="calculate('a0', 'p0', 't0')" placeholder="No.OF CAKES">
					<input style="width: 30%" type="number" id="p0" onblur="calculate('a0', 'p0', 't0')" placeholder="AMOUNT"> <br>
					TOTAL PRICE: <input style="width: 40%" type="number" name="price" id="t0" >
					<input style="width: 50%" type="text" name="phoneno" value="" placeholder="PHONE NO">
					<input style="width: 80%" type="text" name="address" vale="" placeholder="ADDRESS">
					<script>
						calculate = function (a, p, t) {
					        var amount = document.getElementById(a).value;
					        var price = document.getElementById(p).value;
					        document.getElementById(t).value = parseInt(amount)*parseInt(price);}
					</script>

					<input class=" btn btn-default" style="color: black; width: 160px; height: 40px; text-align: center;" type="submit" name="submit" value="BUY NOW">
			</form>
						
			</div>
		</div>
		</div>

	</div>
	

	<?php

		 if(isset($_POST['submit']))
		 {
		 	$count=0;
		 	$res=mysqli_query($db,"SELECT * FROM `login` WHERE username='$_POST[username]';");
		 	$count=mysqli_num_rows($res);

		 	if($count!=0)
		 	{
		 		mysqli_query($db,"INSERT INTO `orders` VALUES ('$_POST[username]','$_POST[quantity]','$_POST[cake_name]','$_POST[price]','$_POST[phoneno]','$_POST[address]');");
		 		?>
		 		<script type="text/javascript">
		 			alert("ADDED TO THE CART SUCCESSFULLY");
		 			window.location=""
		 		</script>
		 		
		 		<?php
		 	}
		 	else
		 	{
		 		?>
		 		<script type="text/javascript">
		 			alert("0 RESULTS MATCHED PLEASE TRY AGAIN LATER");
		 		</script>
		 		
		 		<?php
		 	}
		 }
		 
	 ?>

	<!------------------------title------>

<!-----------------------------js for product galery----------------->
<script>
	var productImg=document.getElementById("productImg");
	var smallimg =document.getElementsByClassName("small-img");

	smallimg[0].onclick =funtion()
	{
		productImg.src=smallimg[0].src;
	}
	smallimg[1].onclick=funtion()
	{
		productImg.src=smallimg[1].src;
	}
	smallimg[2].onclick=funtion()
	{
		productImg.src=smallimg[2].src;
	}
	smallimg[3].onclick=funtion()
	{
		productImg.src=smallimg[3].src;
	}
</script>


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