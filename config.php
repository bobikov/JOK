<?php 

	//constants
	define('db_host', 'localhost');
	define('db_user', 'root');
	define('db_pass', 'immortal');
	define('db_name', 'chats');

	//connect 
	$db = @mysqli_connect(db_host, db_user, db_pass, db_name);
	if (!$db){
		die("<header>Connect Error:" . mysqli_connect_error() . "</header>");
	}


 ?>