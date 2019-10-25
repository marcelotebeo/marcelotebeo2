
<?php

$databaseHost = 'localhost';
$databaseName = 'sirimported';
$databaseUsername = 'root';
$databasePassword = '';

try {
	// http://php.net/manual/en/pdo.connections.php
	$dbConn = new PDO("mysql:host={$databaseHost};sirimported={$databaseName}", $databaseUsername, $databasePassword);
	
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
    // More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
   // echo "EDIT DELETE og ADD, BAHala KA";
} catch(PDOException $e) {
	echo $e->getMessage();
}
 ?>
