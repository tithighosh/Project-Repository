<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$current_pass = $_POST['curpass'];
		$new_pass = $_POST['newpass'];
		$confirm_pass = $_POST['conpass'];

		$newlen = strlen($new_pass);
		$conlen = strlen($confirm_pass);

		$checknew =1;
		$checkcon = 1;

		if ($current_pass == "" || $new_pass== "" || $confirm_pass == "" || $uname== ""){
			echo "null submission" . "<br>";
			}
		elseif(($current_pass == $_COOKIE['password']) && ($uname == $_COOKIE['username']))
		{

			if ($newlen < 4 && $conlen < 4) {
			echo "Password must contain at least 4 characters". "<br>";
			}

			elseif (($newlen > 3 && $conlen > 3) && ($new_pass == $confirm_pass))
			{
			if (strpos($new_pass, '@') == true || strpos($new_pass, '#') == true || strpos($new_pass, '$') == true || strpos($new_pass, '%') == true) {
				$checknew = 0;
				$checkcon = 0;
			}
			elseif ($checknew == 1 || $checkcon == 1) {
				echo "Password must contain at least one of the special characters (@, #, $, %)". "<br>";
			}
			}
			else
			{
			echo "Password size should be more than 3 & Retype Password must match with the New Password.". "<br>";
			}
	
		}
		else{
		echo "username & password is not stored";
		}
		
        if ($checknew == 0 && $checkcon == 0){
        	require_once('../model/sql.php');
        	$changed = changePassword($new_pass, $uname);
        	if($changed){
        		header('location: ../view/homepage.php');
        	}
        	else{
        		echo "Changing Password Failed!";
        	}

			
		}
		else{
			echo "INVALID";
		}

	}

?>

