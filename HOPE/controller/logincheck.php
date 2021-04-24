<?php
	session_start();
	require_once('../model/sql.php');
	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$password = $_POST['password'];
		$utype = $_POST['utype'];
		if ($uname == "" || $password == "") {
			echo "Null Submission";
		}
		else{
			$validation = validateDonor($uname, $password, $utype);
			
			if($validation){
				$name = getName($uname);
				$id = getId($uname, $password);
				
			if(!empty($_POST['remember']))
			{

				setcookie('flag', true, time()+(24*60*60), '/');
				setcookie('name', $name, time()+(24*60*60), '/');
				setcookie('id', $id, time()+(24*60*60), '/');
				setcookie('username', $uname, time()+(24*60*60), '/');
				setcookie('password', $password, time()+(24*60*60), '/');

			}
			else{
				setcookie('flag', true, time()+(60*5), '/');
				setcookie('name', $name, time()+(60*5), '/');
				setcookie('id', $id, time()+(60*5), '/');
				setcookie('username', $uname, time()+(60*5), '/');
				setcookie('password', $password, time()+(60*5), '/');
			}
			header('location: ../view/homepage.php');
		}
		else
		{
				echo "Invalid User";
		}

		}
	}
?>