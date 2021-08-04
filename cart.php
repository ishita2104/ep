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
<!---------------------------------body view-------------------------------->
<h1 style="text-align: center;font-size: 30px;color: black;padding-top: 15px;">ENTER THE USERNAME FOR CONFIRMATION</h1>
					<form name="view" action="" method="post">
						<br>
						<div class="view" style="text-align: center;">
							<center><input class="form-control" type="text" name="username" style="color: black; width: 200px; height: 30px;text-align: center;"placeholder="USERNAME" ></center>
							<input class=" btn btn-default" type="submit" name="submit" value="VIEW" style="color: black; width: 100px; height: 30px; text-align: center;">
<?php
	if(isset($_POST['submit']))
	{
		$res=mysqli_query($db, "SELECT * FROM `orders` where username='$_POST[username]';");

		echo "<table class='table table-bordered table-hover'>";
				echo"<tr style='background-color: white;'>"; 
				echo "<th>"; echo "USERNAME"; echo "</th>";
				echo "<th>"; echo "QUANTITY"; echo "</th>";
				echo "<th>"; echo "CAKE NAME"; echo "</th>";
				echo "<th>"; echo "PRICE"; echo "</th>";
				echo "<th>"; echo "PHONE NO"; echo "</th>";
				echo "<th>"; echo "ADDRESS"; echo "</th>";
			echo "</tr>";

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['cake_name']; echo "</td>";
				echo "<td>"; echo $row['price']; echo "</td>";
				echo "<td>"; echo $row['phoneno']; echo "</td>";
				echo "<td>"; echo $row['address']; echo "</td>";
				
				echo "</tr>";
			}
			echo "</table>";
	}

		 if(isset($_POST['confirm']))
		 {
		 	$count=0;
		 	$res=mysqli_query($db,"SELECT * FROM `orders` WHERE id=1");
		 	$count=mysqli_num_rows($res);

		 	if($count!=0)
		 	{
		 		mysqli_query($db,"INSERT INTO `log` VALUES ('$_POST[username]','$_POST[quantity]','$_POST[cake_name]','$_POST[price]','$_POST[phoneno]','$_POST[address]');");
		 		?>
		 		<script type="text/javascript">
		 			alert("ORDER PLACED SUCCESSFULLY");
		 			
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
<br>
<input class=" btn btn-default" type="submit" name="payment" value="MAKE PAYMENT" style="color: black; width: 200px; height: 30px; text-align: center;">
<?php  
	if(isset($_POST['payment']))
	{
		?>
		 		<script type="text/javascript">
		 			window.location="payment.php"
		 		</script>
		 		
		 		<?php

	}
?>


	<!------footer --->
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