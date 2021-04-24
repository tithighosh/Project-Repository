<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$mail = $_POST['email'];
		$uname = $_POST['uname'];
		$telephoneno = $_POST['teleno'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$dateofbirth = $_POST['dob'];

		$unlen = strlen($uname);

		$check=0;

		$dot = 0;
		$at = 0;

		if ($name == "" || $mail == "" || $uname== "" ||  $telephoneno =="" || $address =="" || $gender == "" || $dateofbirth == ""){
			echo "null submission" . "<br>";
		}

		elseif ($unlen < 3) {
			echo "User Name must contain at least 3 characters". "<br>";
		}


		elseif ($unlen > 2 || $plen > 3) {
			for ($i=0; $i < strlen($uname) ; $i++) { 
				if((ord($uname[$i]) >= 97 && ord($uname[$i]) <= 122) || (ord($uname[$i]) >= 65 && ord($uname[$i]) <= 90) || (ord($uname[$i]) >= 48 && ord($uname[$i]) <= 57) || ($uname[$i] == '.') || ($uname[$i] == '-') || ($uname[$i] == '_'))
            		{
            			if ($i == strlen($uname)-1) {
            				$check++;
            			}
           			}
           			else
           			{
           				break;
           			}
			}
			if ($check == 0) {
				echo "User Name can contain alpha numeric characters, period, dash or underscore only". "<br>";
			}
			if(strpos($name, ' ') == true){
				for ($i=0; $i < strlen($name) ; $i++) { 
					if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || (strpos($name, ' ') == true))
            		{
            			if ($i == strlen($name)-1) {
            				$check++;
            			}
           			}
           			else
           			{
           				break;
           			}
					
				}
				if ($check == 1) {
					echo "Name only can contain alphabets". "<br>";
				}
			}
			else{
				echo "Name should contain at least two words". "<br>";
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
					$check++;
				}
			}
			elseif ($checkm == 2) {
				echo "email is not valid.". "<br>";
			}
		}

        if ($check == 3) {
        	require_once('../model/sql.php');

        	$user = [
        					'name' => $name,
							'username'=>$uname,
							'email'=> $mail,
							'telephoneno' => $telephoneno,
							'address' => $address,
							'gender' => $gender,
							'dateofbirth' => $dateofbirth
					];

			/*echo $user['dateofbirth'];*/
			$id = $_COOKIE['id'];
			$success = editProfile($user, $id);
			if($success == true)
			{
				setcookie('name', $name, time()+(24*60*60), '/');
				setcookie('username', $uname, time()+(24*60*60), '/');

				header('location: ../view/homepage.php');
			}
			else{
				echo "Edit Failed!";
			}

				
		}
	}

?>

