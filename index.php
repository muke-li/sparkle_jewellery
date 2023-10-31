<?php require('header.php'); ?>

<figure id="bannerContainer">
	<img src="placeholder_images/home-1_800-300.jpg" alt="" width="800" height="300" id="banner">
</figure>

<main>
	
	<h2>Jewelry for office lady</h2>
	<div id="bigImage1andtext">
		<div id="bigImage1text">
			<h3>Office lady</h3>
			<p>Our products are especially designed for white-collar female employees who need to develop perfect personal images and give good impressions to clients.</p>
			<a href="#">Explore</a>
		</div>
		
		<figure id="bigImage1">
			<img src="placeholder_images/home-2_800-620.jpg" alt="" width="800" height="620" id="bigImg1">
		</figure>
	</div>
	
	
	<h2>Jewelry for investment</h2>
	<div id="bigImage2andtext">
		<figure id="bigImage2">
			<img src="placeholder_images/home-3_533-400.jpg" alt="" width="533" height="400" id="bigImg2">
		</figure>
		
		<div id="bigImage2text">
			<h3>Investment</h3>
			<p>We offer our clients accurate information in prediction of jewelry and gold.</p>
			<a href="#">Explore</a>
		</div>
	</div>
	
	
	
	<h2>Recommendation</h2>		
	<article>
	<?php
		$id = $_GET['id'];

		$query = "SELECT * FROM products WHERE id='1' OR id='2' OR id='3' OR id='4'";

		$sql = mysqli_query($connection,$query);
		while($row = mysqli_fetch_array($sql)){
			echo "<figure>";
			
				echo '<img src=" thumb/'.$row['thumbnail_image_name'].'" alt="" width="351" height="264">';
			
				echo "<div class=\"tag1\">";
					echo "<a href=\"detail_product_info.php?id=".$row['id']." \"><h3> ".$row['name']."</h3></a>"; // Create variable
					echo "<p> $ ".$row['price']."</p>";
				echo "</div>";
			
			echo "</figure>";
        }
	
	?>
	</article>

<?php require('footer.php'); ?>