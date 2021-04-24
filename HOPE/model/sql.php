<?php
	
	require_once('database.php');

	function insertDonor($register_list){

		$con = getConnection();
		$sql = "insert into register_list (name,username,email,password,type) values('{$register_list['name']}','{$register_list['username']}','{$register_list['email']}', '{$register_list['password']}','{$register_list['type']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
			
		}
		else{
			return false;
		}


	}

	function validateDonor($username, $password, $type)
    {
        $con = getConnection();
        $sql = "select * from register_list WHERE username = '{$username}' AND password = '{$password}' AND type = '{$type}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        if(!empty($row)){
            return true;
        }

        else
        {
            return false;
        }
    }

    function getName($username){

		$con = getConnection();
		$sql = "select name from register_list where username ='{$username}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row['name'];
	}

	function getId($username, $password){

		$con = getConnection();
		$sql = "select id from register_list where username ='{$username}' AND password = '{$password}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row['id'];
	}

	function editProfile($register_list, $id){

		$con = getConnection();

		$sql = "update register_list set name = '{$register_list['name']}', username = '{$register_list['username']}', email = '{$register_list['email']}', gender = '{$register_list['gender']}', dateofbirth = '{$register_list['dateofbirth']}', telephoneno = '{$register_list['telephoneno']}', address = '{$register_list['address']}' where id = '{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function changePassword($password, $username){

		$conn = getConnection();
		$sql = "update register_list SET password = '{$password}' where username ='{$username}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}
		else{
			return false;
		}
	}

	function viewProfile($id){

		$con = getConnection();
		$sql = "select * from register_list where id='{$id}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function viewAllProjects(){
		$con = getConnection();
		$sql = "select * from projects";
		$result = mysqli_query($con, $sql);
		$projects =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($projects, $row); 
		}

		return $projects;
	}

	function viewProjectDetails($id){

		$con = getConnection();
		$sql = "select * from projects where id='{$id}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

    function getProjectName($id){

		$con = getConnection();
		$sql = "select projectname from projects where id ='{$id}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row['projectname'];
	}

	function insertDonation($donation){

		$con = getConnection();
		$sql = "insert into donations (projectname, donorid, initiatorname, initiatortelephoneno, projecttype, creditno, mobileno, currencytype, donationdate, transactionmethod, amount, totalfundindollar) values('{$donation['projectname']}','{$donation['donorid']}','{$donation['initiatorname']}','{$donation['initiatortelephoneno']}', '{$donation['projecttype']}','{$donation['creditno']}','{$donation['mobileno']}','{$donation['currencytype']}','{$donation['donationdate']}','{$donation['transactionmethod']}','{$donation['amount']}','{$donation['totalfundindollar']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}	

	function updateFund($id, $totalfundindollar){

		$con = getConnection();
		$sql = "update projects set totalfundindollar = '{$totalfundindollar}' where id='{$id}'";
		mysqli_query($con, $sql);	
	}

	function insertQueries($query){

		$con = getConnection();
		$sql = "insert into queries (queries,initiatorname,projectname,projecttype,questioner) values('{$query['queries']}','{$query['initiatorname']}','{$query['projectname']}', '{$query['projecttype']}','{$query['questioner']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>