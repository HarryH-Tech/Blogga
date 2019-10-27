<?php
	include_once "../pdo.php";
	$cart_value = 0;
	echo "<div id='cart'>".$cart_value."</div>";
	
	
	if(isset($_POST['add_to_cart'])) {
		//$query = "SELECT * FROM products WHERE id = 
		$q = intval($_GET['q']);
		echo $q;
	}
?>
