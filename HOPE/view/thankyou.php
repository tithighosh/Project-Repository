<?php
	$title = "Thank You";
	include('header.php');
	$name = $_COOKIE['name'];
if (($_COOKIE['donationflag'] == true) && ($_COOKIE['flag'] == true)){
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
<!--     <div style="align-content: center;padding: 50px;">
        <center>
            <img src="../assets/ThankYou.png">
        </center>
    </div> -->
    <div style="align-content: center;">
        <center>
            <?php
            //containing sample image file names
            $image = "../assets/ThankYou.png";
            echo '<img src="' . $image . '" alt="' .  pathinfo($image, PATHINFO_FILENAME) .'">';
            echo '<p><a href="../controller/downloadimg.php?file=' . urlencode($image) . '">Download</a></p>';
    ?>
        </center>
    </div>    <?php
}
else{ if($_COOKIE['flag'] == false){
        header('location:login.php');
    }
    
    else{
        header('location:proposal_list.php');
    }
}
    include('footer.php');
    ?>
</div>
