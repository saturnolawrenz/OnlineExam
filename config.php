<?php 
	$config = array(
		'host' =>'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'registration' 
		);
	$db = new mysqli(
		$config['host'],
		$config['username'], 
		$config['password'],
		$config['database']
	);

	if (mysqli_connect_errno()) {
		echo 'please check your connection';
		exit;
	}
 ?>
