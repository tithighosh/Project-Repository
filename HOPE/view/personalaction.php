<?php
$conn=mysqli_connect("localhost","root","","hope");
?>
<?php


if (isset($_POST['accept'])) {
	  	$id = $_POST['id'];
	  	$row=$id;
	  	$name=$_POST['name'];
	  	$username=$_POST['username'];
	  	$email=$_POST['email'];
	  	$password=$_POST['password'];
	  	$gender=$_POST['gender'];
	  	$dateofbirth=$_POST['dateofbirth'];
	  	$telephoneno=$_POST['telephoneno'];
	  	$address=$_POST['address'];
	  	$approval='1';
	  
	  	

	  	$sql="UPDATE register_list SET `id`='$id',`name`='$name',`username`='$username',`email`='$email', `password`='$password', `gender`='$gender', `dateofbirth`='$dateofbirth', `telephoneno`='$telephoneno', `address`='$address' WHERE id=$id ";
	  	$result1=mysqli_query($conn,$sql);
	  	if($result1)
	  	{
	  		echo "hello";
	  		header("Location: ../successMessage1.php?message=accept");
	  		
	  	}

	  }
	  ?>
	  <?php
	  if (isset($_POST['delete'])) {
	  	$id =$_POST['id'];
	  	echo $id;
	  	$row=$id;
	  	$Name=$_POST['name'];
	  	echo $campaignName;

	  	$sql="DELETE FROM `register_list` WHERE id=$id ";
	  	$result1=mysqli_query($conn,$sql);
	  	header("Location: ../successMessage1.php?message1=delete");

	  }

	  ?>
	  
	  