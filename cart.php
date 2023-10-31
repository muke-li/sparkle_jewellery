<?php require('header2.php'); ?>
	
	<?php
		echo "<h1>Shopping Cart</h1>";

		$id = $_GET['id'];
		
		$query = "SELECT * FROM cart WHERE session_id = '$session_id'";
		$sql = mysqli_query($connection, $query);
	
		while($row = mysqli_fetch_array($sql)){
			
			echo '<h2>'.$row['name'].'</h2>';
			echo '<h3>$ '.$row['price'].'</h3>';
			$price = $price + $row['price'];
			
		}

			echo "<p>Total price: $".$price."</p>";
	?>
	
	<fieldset>
	<form method="post" action="add-order.php">

		<h2>Checkout</h2>
		
		<label for="customer">Your Name</label>
		<input type="text" name="customer" id="customer" required>
		
		<label for="email">Email Address</label>
        <input type="text" name="email" id="email" maxlength="250" required>
				
		<input type="submit" value="Checkout">

	</form>
	</fieldset>

</article>
<?php require('footer.php'); ?>