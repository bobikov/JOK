<?php include "config.php";
$username = $db -> real_escape_string($_POST['username']);
	$query = mysqli_query($db, "SELECT id FROM users WHERE username='$username'");
	if ($result = $query){
	// $row_count = mysqli_num_rows($result); 
		$row_count = $db -> affected_rows;
		if ($row_count != 1){
			echo "yes";
		}
		else { 
			echo "no";
		};
	};
	mysqli_close($db);
?>