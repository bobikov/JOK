
<?php include "config.php" ;

	if (isset($_SESSION['id'])){
		echo "<header>ok</header>";
	}
	else {
		echo "<header>Please login or register</header>";
	};

?>

