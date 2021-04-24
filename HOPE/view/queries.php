<?php
	$title = "Ask Queries";
	include('header.php');
	$name = $_COOKIE['name'];
	$index = $_GET['index'];
if ($_COOKIE['flag'] == true) {
	$myfile = fopen('../model/projects.json', 'r');
    $data = fread($myfile, filesize('../model/projects.json'));
    fclose($myfile);
	$all_projects = json_decode($data,true);
    $projectinitiator = $all_projects[$index]['initiatorname'];
	$projectname = $all_projects[$index]['projectname'];
    $projecttype = $all_projects[$index]['projecttype'];
?>
</head>
<body style="background-color: LightGoldenrodYellow;">
	<div style="padding:30px; background-color:LightGreen;">
        <table width="100%">
            <tr>
                <td align = "left" width="50%">
                    <img src= ../assets/logo.jpg alt="Logo of the Company"  sizes="10px" width="30%">
                </td>
                <td align="center">
                    <h1 style= "font-size:400%;color: Cornsilk;">HOPE</h1>
                </td>
                <td align = "right" width="50%" class="lime">
                    <div style= "font-size:150%;">
                        <a href="homepage.php" style ="color:RosyBrown;"> Go to Home</a><br>
                        <a href="viewprofile.php" style ="color:    RosyBrown;"><?=$name?></a><br>
                        <a href='../controller/logout.php'style ="color:RosyBrown;">Log Out</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
	<div style="align-content: center;">
		<center>
			<form method="POST" action="#">
				<h1 style="color: black;">Enter Your Queries</h1>
                <h2 style="color: black;">Queries Will Be Sent To <?=$projectinitiator?></h2>
                <table style="padding: 30px;width: 80%">
                	<tr style="height: 70px;">
                		<td colspan="2" align="center">
                			<textarea cols="30" rows="20" placeholder="Enter Your Queries Here" name='queries' style="height: 30px;font-size: 20px; width:180px;"></textarea><br>
                		</td>
                	</tr>
                	<tr>
                		<td colspan="2" align="center">
                			<input type='submit' name="submit" value="Send" style="height: 36px;font-size: 20px; width:100px;"><br><br>
                		</td>
                	</tr>
                    <tr>
                        <td><h4 style="align-content: center;">
                            <?php
    if(isset($_POST['submit']))
    {
        $queries = $_POST['queries'];
        if($queries == ""){
            echo "Please enter query!";
        }
        else{
            $myfile = fopen('../model/queries.json', 'r');
            $data = fread($myfile, filesize('../model/queries.json'));
            fclose($myfile);
            $decode = json_decode($data,true);

            $query = [
                            'queries' => $queries,
                            'initiatorname'=>$projectinitiator, 
                            'projectname'=>$projectname, 
                            'projecttype' => $projecttype,
                            'questioner' => $name
                        ];
            $decode_n = $decode;

            $all_queries = $decode_n;
            array_push($all_queries, $query);


            $curr_queries = json_encode($all_queries);
            $myfile = fopen('../model/queries.json', 'w');
            fwrite($myfile, $curr_queries);
            fclose($myfile);
            echo "Query sent successfully!";
        }

    }?>
                        </h4></td>
                    </tr>
                </table>
					<a href="view_proposal.php?index=<?php echo $index ?>" style="font-size: 25px;">Go Back</a>
			</form>
		</center>
	</div>
</body>
	
        <?php
}
else{
	header('location:login.php');
}
	include('footer.php');
	?>
