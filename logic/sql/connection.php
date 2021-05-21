<?php

try {
	$connect = new PDO('mysql:host=localhost;dbname=formulariologin1', 'root', '');
} catch(PDOexception $e) {
	echo "Error: " . $e -> getMessage();
}

?>