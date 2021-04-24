<?php
	require_once('database.php');
		/*$con = getConnection();
		$sql = "select name from donors where username ='nafisa'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		print_r($row['name']);*/

		
			$password = 'ABC@'; $username = 'tithi';
			$con = checkPass($password, $username);
/*		$sql = "UPDATE `donors` SET `password` = '{$password}' WHERE `donors`.`username` = '{$username}'";*/
		if($con){
			//return true;
			echo "success";
		}else{
			//return false;
			echo "failed";

	}

?>