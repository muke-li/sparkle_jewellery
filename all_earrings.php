<?php require('header.php'); ?>

<main>
<h1>All earrings</h1>
	
	<nav id="subNavigation">
		<a href="#">All Earrings</a>
		<a href="#">Adornment</a>
		<a href="#">Investment</a>
		<a href="#">Asian</a>
		<a href="#">Price</a>
	</nav>
	
	<figure id="bigImage1">
		<img src="placeholder_images/all_earrings_cut.jpg" alt="Earrings placed on a mirror" width="800" height="381" id="bigImg1">
	</figure>

	<h2>All earrings</h2>
	
<form>
	<label for="sortPrice">Price</label>
		<select name="price" id="sortPrice">
			<option value="all">All</option>
			<option value="lessThanSixty">Less than 60</option>
			<option value="sixtyOneToOneHundred">61 to 100</option>
			<option value="OneHundredOneToTwoHundred">101 to 200</option>
			<option value="TwoHundredOneToThreeHundred">201 to 300</option>
		</select>
	<input type="submit" value="Apply">
</form>
	
<form>
	<label for="sortDesign">Design</label>
		<select name="design" id="sortDesign">
			<option value="all">All</option>
			<option value="mini">Minimalism</option>
			<option value="floral">Floral Pattern</option>
			<option value="diamond">Diamond Jewllery</option>
		</select>
	<input type="submit" value="Apply">
</form>
	
<article>
	<?php
		$price = $_GET['price'];

		if($price == 'lessThanSixty'){
			$query = "SELECT * FROM products WHERE price < 60";
		}
		else if($price == 'sixtyOneToOneHundred') {
			$query = "SELECT * FROM products WHERE price BETWEEN 61 AND 100";
		}
		else if($price == 'OneHundredOneToTwoHundred') {
			$query = "SELECT * FROM products WHERE price BETWEEN 101 AND 200";
		}
		else if($price == 'TwoHundredOneToThreeHundred') {
			$query = "SELECT * FROM products WHERE price BETWEEN 201 AND 300";
		}
		else{
			$query = "SELECT * FROM products";
		}
		
	
		$design = $_GET['design'];

		if($design == 'mini'){
			$query = "SELECT * FROM products WHERE design_style = 'minimalist'";
		}
		else if($design == 'floral') {
			$query = "SELECT * FROM products WHERE design_style = 'floral'";
		}
		else if($design == 'diamond') {
			$query = "SELECT * FROM products WHERE design_style = 'diamond'";
		}

	
		$sql = mysqli_query($connection,$query);
		while($row = mysqli_fetch_array($sql)){

			echo "<figure class=\"detailInfo\">";
			
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