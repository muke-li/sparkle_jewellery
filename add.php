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
	<title>Add</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>	
	
<?php
	

$id = $_GET['id'];

$query = "SELECT name,price FROM products WHERE id=$id";
$sql = mysqli_query($connection, $query);


while($row = mysqli_fetch_array($sql)){
		$name = $row['name'];
		$price = $row['price'];
	}


	$query = "INSERT INTO cart (name,price,session_id) VALUES ('$name','$price','$session_id')";	
	
	$sql = mysqli_query($connection,$query);
        
		if($sql){
                echo '<p>Your data was added to the database.</p>';
            } else {
                echo mysqli_error($connection);
            }

?>

</body>
</html>