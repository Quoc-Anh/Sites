<?php  
	define('HOST', 'localhost');
	define('DB_NAME', 'id15504664_users');
	define('USER', 'id15504664_akirashima');
	define('PASS','Kendylove-159');

	try {
		$db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e;
	}
?>