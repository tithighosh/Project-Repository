<?php
$title = "Donation History";
include('header.php');
$name = $_COOKIE['name'];
if ($_COOKIE['flag'] == true) {
	require_once('../model/sql.php');
	$id = $_COOKIE['id'];
	$row = viewProfile($id);

	$username = $row['username'];
	$email = $row['email'];
	$telephoneno = $row['telephoneno'];
	$usertype = $row['type'];
	$address = $row['address'];
	$gender = $row['gender'];
	$dateofbirth = $row['dateofbirth'];
	//$profilepic = $row['profilepic'];

?>
<style>
    body{
        background-image: url('bg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
    }
    .button{
    	/*display: block;*/
    	width: 130px; 
    	height: 30px;
    	background: #4E9CAF;
    	padding: 25px;
    	text-align: center;
    	color: white;
    	border-radius: 10px;
    	font-weight: bold;
    	line-height: 25px;
    }
</style>
<h1 style= "font-size:300%;color:darkblue"><img src="hope.jpg" height="40" width="50">HOPE</h1>
    <table width="100%">
            <tr>
                <td align = "right" width="50%" class="lime">
                    <div style= "font-size:150%;">
                        <a href="viewprofile.php" style ="color:RosyBrown;"> Back</a><br>
                        <a href='../controller/logout.php'style ="color:RosyBrown;">Log Out</a>
                    </div>
                </td>
            </tr>
    </table>
    </div>
	<div id="page_title">
		<center>
			<h1>Donation History of <?=$name?></h1>
		</center>
	</div>
	
	<div id="main_content"style="padding: 30px">
		<center>
			<table border="1" width = 70% style="padding: 30px; font-size: 25px;font-family:Helvetica, sans-serif; ">
			<tr align="center" style="height: 50px;">
			<h3>
				<td style="width: 300px;">NAME</td>
			</h3>
				<td><?=$name?></td>
			</tr>
			<tr align="center" style="height: 50px;">
				<h3>
					<td style="width: 300px;">USER NAME</td>
				</h3>
				<td><?=$username?></td>
			</tr>
			<tr align="center" style="height: 50px;">
				<h3>
					<td style="width: 300px;" >EMAIL</td>
				</h3>
				<td><?=$email?></td>
			</tr><?php
			if($telephoneno !=""){
				?>
			<tr align="center" style="height: 50px;">
				<h3>
					<td style="width: 300px;">TELEPHONE NO</td>
				
				</h3>
				<td><?=$telephoneno?></td>
			</tr><?php } ?>
			<tr align="center" style="height: 50px;">
				<h3>
				<td style="width: 300px;">USER TYPE</td>
				</h3>
				<td><?=$usertype?></td>
			</tr><?php
			if($gender !=""){
				?>
			<tr align="center" style="height: 50px;">
				<h3>
				<td style="width: 300px;">GENDER</td>
				</h3>
				<td><?=$gender?></td>
			</tr><?php } if($dateofbirth !=""){
				?>
			<tr align="center" style="height: 50px;">
				<h3>
				<td style="width: 300px;">DATE OF BIRTH</td>
				</h3>
				<td><?=$dateofbirth?></td>
			</tr>		<?php } if($address !=""){
				?>	
			<tr align="center" style="height: 50px;">
				<h3>
					<td style="width: 300px;">ADDRESS</td>
				</h3>
				<td><?=$address?></td>
			</tr><?php } ?>
<!-- 			<tr align="center" style="height: 200px;">
				<h3>
					<td style="width: 50px;">PROFILE PICTURE</td>
				</h3>
				<td><?php echo "<img src='$profilepic' style ='width:150px ;height:150px;'>" ;?></td>
			</tr> -->

			</table>
		</center>
	</div><br><br>
	<div >
		<center>
			<a class= "button" href="donationhistory.php?id=<?php echo $id?>" name="donationhistory" style="font-size: 20px;">Donation History</a>
			<a class= "button" href="editprofile.php" name="editprofile" style="font-size: 20px;">Edit Profile</a>
			<a class= "button" href="change_pass.php" name="changepassword" style="font-size: 20px;">Change Password</a>
		</center><br><br>
	</div>
<?php
}
   else
    {
        header('location: login.php');
    }
    include('footer.php');
    ?>