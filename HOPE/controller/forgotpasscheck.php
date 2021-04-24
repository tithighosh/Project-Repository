<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$new_pass = $_POST['newpass'];
		$confirm_pass = $_POST['conpass'];
		$newlen = strlen($new_pass);
		$conlen = strlen($confirm_pass);

		$checknew =1;
		$checkcon = 1;
		$old = null;
		require_once('../model/sql.php');
		$name = getName($uname);

		if($name != null){
		if ($new_pass== "" || $confirm_pass == "" || $uname== ""){
			echo "null submission" . "<br>";}

		elseif ($newlen < 4 && $conlen < 4) {
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
			echo "Retype Password must match with the New Password.". "<br>";
		}
		if ($checknew == 0 && $checkcon == 0){
				
				$changed = changePassword($new_pass,$uname);
				if($changed){
					header('location: ../view/login.php');
				}
				else{
					echo "Changing password failed!";
				}

			}
			else{
				echo "INVALID";
			}
		}
	
	}
	else{
	echo "Invalid username & password";
	}

?>

