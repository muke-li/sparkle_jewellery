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
	<title>Add order</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php		
	
		$id = $_GET['id'];
		$query = "SELECT * FROM cart ";
		$sql = mysqli_query($connection, $query);
		
	while($row = mysqli_fetch_array($sql)){
		$name = $row['name']; //This $row['name'] already includes all of the items in the $row['name'] array.
		$price = $row['price'];
	}
		
		
		$name = explode(' ',$name);
		$price = explode(' ',$price);
	
		$name = implode(' ',$name);
		$price = implode(' ',$price);
	
		echo $name;

		$customer = mysqli_real_escape_string($connection,$_POST['customer']);
		$email = mysqli_real_escape_string($connection,$_POST['email']);

		$query = "INSERT INTO orders (name,price,customer,email,session_id) VALUES ('$name','$price','$customer','$email','$session_id')";
		$sql = mysqli_query($connection,$query);
	
		if($sql){
                echo '<p>Your order was added to the database.</p>';
            } else {
                echo mysqli_error($connection);
            }
		
		
		$query = "DELETE FROM cart WHERE session_id = '$session_id'";
		$sql = mysqli_query($connection,$query);
		
		if($sql){
                echo '<p>Your order was added to the database.</p>';
            } else {
                echo mysqli_error($connection);
            }
	
	?>
</body>
</html>