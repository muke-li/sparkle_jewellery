<?php require('header2.php'); ?>	
	
	<?php
		$id = $_GET['id'];
		
		$query = "SELECT * FROM products WHERE id=$id ";
		$sql = mysqli_query($connection, $query);
	
		while($row = mysqli_fetch_array($sql)){
						
			echo '<h1> Product Details </h1>';
			
			echo '<div>';
				
				echo '<figure class="detailInfo">';
					echo '<img src=" full/'.$row['full-size_image_name'].'" alt="" width="2014" height="1512" id="detailImage">';			
				echo '</figure>';
			
				echo '<div class="productText">';
					echo '<h2>'.$row['name'].'</h2>';
					echo '<h3>'.$row['price'].'</h3>';
					echo $row['description'];
					echo "<a href='add.php?id=".$row['id']."'>Add to cart</a>"; // Create variable
				echo '</div>';
			
			echo '</div>';
		}
	?>

</article>
<?php require('footer.php'); ?>