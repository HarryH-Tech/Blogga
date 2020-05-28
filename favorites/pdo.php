<?php
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=blogga','root', 'root');
	$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<?php
	//$pdo = new PDO('mysql:host=<YOURHOST>;port=<PORTNUMBER>;dbname=blogga','<YOURUSERNAME>', '<YOURPASSWORD>');
	//$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>