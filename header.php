<?php
session_start();
$session_id = session_id();
?>
<?php
	$server = "localhost";
    $username = "mli_products";
    $password = "UD78)(qu^zUQ";
    $database = "mli_mmda225_ecommerce";

	$connection = mysqli_connect($server,$username,$password,$database);

	if(!$connection){
		die(mysqli_connect_error());
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sparkle Jewelry - All earrings</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/c1a1098c60.js" crossorigin="anonymous"></script>
</head>
	
<body>
	
<header>

		<nav id="navIconsContainer">
<!--magnifying-glass, phone AND cart, user-->
			<div id="firstIconsGroup">
				<a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
				<a href="#"><i class="fa-solid fa-phone"></i></a>
			</div>
		
			<img src="icons/logo-white.png" alt="" width="592" height="268" id="logo">	

			<div id="secondIconsGroup">
				<a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
				<a href="#"><i class="fa-solid fa-user-large"></i></a>
			</div>
		</nav>


		<nav id="mainNavContainer">
			<a href="index.php">Home</a>
			<a href="all_earrings.php">All Products</a>
			<a href="#">News</a>
			<a href="#">About Us</a>
		</nav>

</header>