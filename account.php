<?php
include "connection.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="view-port" content="width=device-width,initial-scale=1.0">
	<title>CUPPIES-account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
	</div>




<div class="account-page">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<img src="cake4.jpeg" width="100%">
			</div>
			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
						<span onclick="login()">LOGIN</span>
						<span onclick="register()">REGISTER</span>
						<hr id="Indicator">
					</div>
					<form id="LoginForm" method="post" action="account.php">
						<input type="text" name="username" placeholder="Username">
						<input type="text" name="password" placeholder="Password">
						<button type="submit" name="login" class="btn">LOGIN</button>
						<a href="">FORGOT PASSWORD</a>
					</form>

					<form id="RegForm" method="post" action="account.php">
						<input type="text" name="username" placeholder="Username">						
						<input type="text" name="password" placeholder="Password">
						<input type="email" name="email" placeholder="Email">
						<button type="submit" name="register" class="btn">REGISTER</button>
						
					</form>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<?php

	 if(isset($_POST['login']))
	 {
	 	$count=0;
	 	/*$countadmin=0;
		$resadmin=mysqli_query($db,"SELECT * FROM `register` WHERE username='admin' and password='1234';");
		$countadmin=mysqli_num_rows($resadmin);*/
		$res=mysqli_query($db,"SELECT * FROM `register` WHERE username='$_POST[username]' and password='$_POST[password]';");
		 $count=mysqli_num_rows($res);
		 if($_POST[username]=='admin')
		 {
		 	$count++;
		 }
		 if($count==1)
		 {
		 	mysqli_query($db,"INSERT INTO `login` VALUES ('$_POST[username]','$_POST[password]');");
		 	?>
				<script type="text/javascript">
		 			window.location="product.php"
		 		</script>
		 		
		 	<?php
		 }
		 else if($count==0)
		 {
			?>
		 		<script type="text/javascript">
		 			alert("THE USERNAME AND PASSWORD DOES NOT MATCH. ");
		 			window.location="account.php"
		 		</script>
		 		
	 		<?php
	 	}
		 
		 else if($count==2)
		 {
			 	?>
			 		<script type="text/javascript">
			 			window.location="admin.php"
			 		</script>
			 		
			 		<?php
		 }
	}
	 
	 ?>

	 <?php 
		if (isset($_POST['register'])) 
		{
			$count=0;
			$sql="SELECT username from register";
			$res=mysqli_query($db,$sql);
			while ($row=mysqli_fetch_assoc($res)) 
			{
				if($row['username']==$_POST['username'])
				{
					$count=$count+1;
				}
			}
			if($count==0)
			{
				mysqli_query($db,"INSERT INTO `register` VALUES ('$_POST[username]','$_POST[password]','$_POST[email]');");	

				?>
					<script	type="text/javascript">
						alert("REGISTRATION SUCCESSFUL");
					</script>

				<?php
			}
			else
			{
				?>
					<script	type="text/javascript">
						alert("USER NAME ALREADY EXIST");
					</script>

				<?php
			}
		}

	?>

<!-----------------------------footer-------------------------------------------->
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

<!-----------------------------js for toggle form--------------------->
<script>
	var LoginForm=document.getElementById("LoginForm");
	var RegForm=document.getElementById("RegForm");
	var Indicator=document.getElementById("Indicator");

	function register(){
		RegForm.style.transform="translateX(0px)";
		LoginForm.style.transform="translateX(0px)";
		Indicator.style.transform="translateX(100px)";
	}
	function login(){
		RegForm.style.transform="translateX(300px)";
		LoginForm.style.transform="translateX(300px)";
		Indicator.style.transform="translateX(0px)";
	}
</script>

</body>
</html>
