<?php
	session_start();
	require_once('../model/sql.php');
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['pass'];
		$mail = $_POST['email'];
		$uname = $_POST['uname'];
		$con_password = $_POST['cpass'];
		$type = $_POST['utype'];

		$unlen = strlen($uname);
		$plen = strlen($password);

		$checkun =1;
		$checkn =1;
		$checkp =1;
		$checkm = 1;

		$dot = 0;
		$at = 0;


	


		if ($name == "" || $password == "" || $mail == "" || $uname== "" || $con_password == ""){
			echo "Null Submission!" . "<br>";
		}

		elseif ($unlen < 3) {
			echo "User Name must contain at least 3 characters.". "<br>";
		}

		elseif ($plen < 4) {
			echo "Password must contain at least 4 characters". "<br>";
		}

		elseif ($unlen > 2 || $plen > 3) {
			for ($i=0; $i < strlen($uname) ; $i++) { 
				if((ord($uname[$i]) >= 97 && ord($uname[$i]) <= 122) || (ord($uname[$i]) >= 65 && ord($uname[$i]) <= 90) || (ord($uname[$i]) >= 48 && ord($uname[$i]) <= 57) || ($uname[$i] == '.') || ($uname[$i] == '-') || ($uname[$i] == '_'))
            		{
            			if ($i == strlen($uname)-1) {
            				$checkun = 0;
            			}
           			}
           			else
           			{
           				break;
           			}
			}
			if ($checkun == 1) {
				echo "User Name can contain alpha numeric characters, period, dash or underscore only.". "<br>";
			}
			if (strpos($password, '@') == true || strpos($password, '#') == true || strpos($password, '$') == true || strpos($password, '%') == true) {
				$checkp = 0;
			}
			elseif ($checkp == 1) {
				echo "Password must contain at least one of the special characters (@, #, $, %).". "<br>";
			}
			if(strpos($name, ' ') == true){
				for ($i=0; $i < strlen($name) ; $i++) { 
					if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || (strpos($name, ' ') == true))
            		{
            			if ($i == strlen($name)-1) {
            				$checkn = 0;
            			}
           			}
           			else
           			{
           				break;
           			}
					
				}
				if ($checkn == 1) {
					echo "Name only can contain alphabets.". "<br>";
				}
			}
			else{
				echo "Name should contain at least two words.". "<br>";
			}
			if ((strpos($mail, '@') == true) && (strpos($mail, '.') == true)) {
					for ($j=0; $j < strlen($mail) ; $j++) {
					if((ord($mail[$j]) >= 97 && ord($mail[$j]) <= 122) || (ord($mail[$j]) >= 65 && ord($mail[$j]) <= 90) || (ord($mail[$j]) >= 48 && ord($mail[$j]) <= 57) ||  ($mail[$j] == '.') || ($mail[$j] == '@'))
					{
            			if ($mail[$j] == '.') {
            				$dot = $j;
            			}
            			if($mail[$j] == '@'){
            				$at = $j;
            			}

           			}
					else{
						echo "email is not valid.". "<br>";
						break;
					}
				}
				if($dot > $at+4){
					$checkm = 0;
				}
			}
			elseif ($checkm == 1) {
				echo "email is not valid.". "<br>";
			}
		}
		
		elseif ($password != $con_password) {
			echo "Confirm Password must match with the Password.". "<br>";
		}

        if ($checkn == 0 && $checkp == 0 && $checkm == 0 && $checkun == 0) {

        	$user = [
        					'name' => $name,
							'username'=>$uname, 
							'password'=>$password, 
							'email'=> $mail,
							'type' => $type/*,
							'teleno' => "",
							'address' => "",
							'gender' => "",
							'dateofbirth' => ""
*/						];

			$success = insertDonor($user);
			if($success){
				header('location: ../view/login.php');
			}
			else{
				echo "Sign up failed due to insertion faliure!";
			}

			
			}
	}

?>