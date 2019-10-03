<?php
try {
	//$conn = new PDO('mysql:host=localhost;dbname=manager', 'root', 'tresde0599');
	$conn = new PDO('mysql:host=localhost;dbname=akiraweb_ch', 'akiraweb_chu19', 'chhoras2019$');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
	catch(PDOException $e){
		echo "ERROR: " . $e->getMessage();
}

date_default_timezone_set('America/Argentina/Buenos_Aires');
?>