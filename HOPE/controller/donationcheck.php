<?php
	session_start();
	$index = $_GET['index'];
	if(isset($_POST['submit']))
	{
		$transactionmethod = $_POST['tranmethod'];
		$creditno = $_POST['creditno'];
		$mobileno = $_POST['mobileno'];
		$donationdate = $_POST['donationdate'];

		$check = 0;
		if (($transactionmethod == "bKash")||($transactionmethod == "rocket")){
			if (($mobileno == "") || empty($donationdate)){
				echo "Null submission";
				$check = 1;
			}
			elseif(strlen($mobileno)<4){
			echo "Mobile Digit contains at least 4 digit";
			$check = 1;
		}
			
		}

		elseif(($transactionmethod == "gopay")||($transactionmethod == "paypal")){
				if (($creditno == "") || empty($donationdate)){
				echo "Null submission";
				$check = 1;
			}
			elseif(strlen($creditno)<4){
			echo "Credit Card Number contains at least 4 digit";
			$check = 1;
		}
		}


		if ($check == 0) 
		{
			$myfile = fopen('../model/projects.json', 'r');
    		$data = fread($myfile, filesize('../model/projects.json'));
    		fclose($myfile);
			$all_projects = json_decode($data,true);

			$projectname = $all_projects[$index]['projectname'];
			$initiatorname = $all_projects[$index]['initiatorname'];
			$telephoneno_init = $all_projects[$index]['teleno'];
			$projecttype = $all_projects[$index]['projecttype'];
			$totalfundindollar = $all_projects[$index]['totalfundindollar'];

			$amount = $_SESSION['amount'];
			/*echo $amount;*/
        	$currencytype = $_SESSION['currencytype'];
        	/*echo $currencytype;*/
			if($currencytype ==  "taka"){
				$totalfundindollar = $totalfundindollar + ($amount/84);
			}
			elseif($currencytype ==  "rupee"){
				$totalfundindollar = $totalfundindollar + ($amount/74);
			}
			elseif($currencytype ==  "euro"){
				$totalfundindollar = $totalfundindollar + ($amount/0.84);
			}
			elseif($currencytype ==  "usdollar"){
				$totalfundindollar = $totalfundindollar + $amount;
			}			
			setcookie('donationflag', true, time()+(60*5*5), '/');
				//setcookie('name', $user['name'], time()+(24*60*60), '/');
			$myfile = fopen('../model/donationhistory.json', 'r');
        	$data = fread($myfile, filesize('../model/donationhistory.json'));
        	fclose($myfile);
			$all_donation = json_decode($data,true);

        	$donation = [
        					'projectname' => $projectname,
        					'initiatorname' => $initiatorname,
        					'telephonenoinitiator' => $telephoneno_init,
        					'initiatorname' => $initiatorname,
        					'projecttype' => $projecttype,
        					'creditno' => $creditno,
							'mobileno'=>$mobileno, 
							'currencytype'=>$currencytype, 
							'transactionmethod'=> $transactionmethod,
							'amount' => $amount,
							'totalfundindollar' => $totalfundindollar,
							'donationdate' => $donationdate
						];

			$all_donation = $all_donation;
			array_push($all_donation, $donation);


			$curr_donation = json_encode($all_donation);
			$myfile = fopen('../model/donationhistory.json', 'w');
			fwrite($myfile, $curr_donation);
			fclose($myfile);
			//header('location: ../view/thankyou.php');
		}

			if($check == 1)
			{
				echo "Donation Failed!";
			}
			else{
				header('location: ../view/thankyou.php');
			}

	}
	
?>