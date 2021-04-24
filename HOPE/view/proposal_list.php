<?php
$title = "Project Proposal List";
include('header.php');
$name = $_COOKIE['name'];
if ($_COOKIE['flag'] == true) {
?>
<style>
    body{
        background-image: url('bg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
    }
</style>
<h1 style= "font-size:300%;color:darkblue"><img src="hope.jpg" height="40" width="50">HOPE</h1>

<body><table width="100%">
            <tr>
                <td align = "right" width="50%" class="lime">
                    <div style= "font-size:150%;">
                        <a href="homepage.php" style ="color:RosyBrown;"> Back</a><br>
                        <a href='../controller/logout.php'style ="color:RosyBrown;">Log Out</a>
                    </div>
                </td>
            </tr>
    </table>
    </div>
	<div id="page_title">
		<center>
			<h1>Project Proposal List</h1>
		</center>
	</div>
	<div id="main_content"style="padding: 30px">
		<center>
			<table border="1" width = 70% style="padding: 30px; font-size: 25px;font-family:Helvetica, sans-serif; ">
			<tr align="center" style="height: 50px;">
			<h3>
				<td style="width: 30%;">PROJECT NAME</td>
				<td style="width:  30%;">INITIATORS'S NAME</td>
				<td style="width:  20%;">PROJECT TYPE</td>
				<td>DETAILS</td>
			</h3>
			</tr>
			<?php
				require_once('../model/sql.php');
				$conn = getConnection();
				$sql = 'select * from projects';
	$result = mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_assoc($result)) {
					?>
					<tr align="center" style="font-size: ">
						<td><?=$row['projectname']?></td>
						<td><?=$row['initiatorname']?></td>
						<td><?=$row['projecttype']?></td>
						<td><a href="view_proposal.php?index=<?php echo $row['id'] ?>">View Details</a></td>
					</tr>
				<?php
			}
			?>		
			</table>
		</center>
	</div>
<?php
}
   else
    {
        header('location: login.php');
    }
    include('footer.php');
    ?>