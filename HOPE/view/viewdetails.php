<!DOCTYPE html>
<html>
<head>
	<title>View Details</title>
	<link rel="stylesheet" type="text/css" href="manageEvent.css">
	
</head>
<style>
    body{
        background-image: url('bg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
    }
</style>
<h1 style= "font-size:300%;color:darkblue"><img src="hope.jpg" height="40" width="50">HOPE</h1>

<table width="100%">
            <tr>
                <td align = "right" width="100%" class="lime">
                    <div style= "font-size:150%;">
                        <a href="homepage.php" style ="color:RosyBrown;"> Back</a><br>
                        <a href='../controller/logout.php'style ="color:RosyBrown;">Log Out</a>
                    </div>
                </td>
            </tr>
    </table>

<body>
	
   <center>
    <div class="tableoFCampaign">
        <div >
            <div class="titleOfTable"><h1>Member List</h1></div>
            <table>
                <tr><h2>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>User Type</th>
                    <th>Details</th>
               </h2> </tr>
                <?php
                    $conn = mysqli_connect("localhost","root","","hope");
                ?>
               <?php
                 $sql = "SELECT * FROM register_list;";
                 $result = mysqli_query($conn , $sql);
                 while($row = mysqli_fetch_assoc($result))
                 	{
                        static $num=1;
                 		echo "<tr>";
                            echo "<td>".$num++."</td>";
                            echo "<td>".$row['name']."</td>";
                            
                            echo "<td>".$row['type']."</td>";
                            
                ?>
                            <td>
                                <form method='post' action='persondetails.php'>
                                    <input type="hidden" name="id" value="<?php echo $row['id'];?> ">
                                    <button type="submit" name="review" class="reviewButton">View</button>
                                    
                                </form>
                            </td>
                        </tr>
                <?php   
                    }
                ?>
                
            </table>
        </div >
    </div>
</div>
</div>
</center>
</body>
</html>