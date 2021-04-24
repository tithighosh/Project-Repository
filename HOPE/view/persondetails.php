<?php
	if(!isset($_POST['review'])) {
		header("Location: viewdetails.php");
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Details</title>
	<link rel="stylesheet" type="text/css" href="reviewDonors.css">
</head>

<body>

	
	  <?php
       $conn=mysqli_connect("localhost","root","","hope");	  
       ?>
	  <?php
	  if (isset($_POST['view'])) {
	  	$id =$_POST['id'];
	  }
	  ?>
	  <?php 
	  $sql1="SELECT * FROM register_list where WHERE name = '{name}' AND email = '{email}' AND type = '{type}' AND gender = '{gender}' AND  telephoneno = '{telephoneno}' AND address = '{address}'
                        ;";
      $result1=mysqli_query($conn,$sql1); 

	  
	  ?>
	<div class="titleDiv">
		<h3 class='titleOftable'>Review PersonalDetails</h3>
	</div>	
		<div class="review-section">
		<?php
		
          {
          	?>
				<form method="POST" action="includes/reviewDonorAction.php">
					
			    <label class="label">Name:</label><br>
			    <input type="text" name="name" value="<?php echo $row['name'];?>"><br><br>
               
                <label class="label">Email<br></label>
                <input type="text" min="1" name="email" value="<?php echo $row['email'];?>"><br><br>

                <label class="label">Type<br></label>
                <input type="text" min="1" name="type" value="<?php echo $row['type'];?>"><br><br>

                <label class="label">Gender<br></label>
                <input type="text" min="1" name="gender" value="<?php echo $row['gender'];?>"><br><br>

                <label class="label">Telephone<br></label>
                <input type="text" min="1" name="telephoneno" value="<?php echo $row['telephoneno'];?>"><br><br>
                

                <label class="label">Campaign Name:<br></label>
                <input type="text" name="campaignName" value="<?php 
               				$c_id = $row['campaign_id'];
                            $sql1 = "SELECT campaign_name,campaign_id FROM campaigns
                            WHERE campaign_id = '$c_id';";
                            $result1 = mysqli_query($conn, $sql1);
                            $row1 = mysqli_fetch_assoc($result1);
                            $c_name = $row1['campaign_name'];

                            echo $c_name;
                            ?>"><br><br>
                <label class="label">Address:<br></label>
                <input type="text" name="address"  value="<?php echo $row['address'];?>" ><br><br>
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
               
				
		</form>
		<?php
	   }
	?>
	</div>
</body>
</html>