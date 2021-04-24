<?php
	$title = "Transaction Method";
	include('header.php');
	$name = $_COOKIE['name'];
	$index = $_GET['index'];
if ($_COOKIE['flag'] == true) {
    if(isset($_POST['submit']) && (!empty($_POST['amount'])))
    {
        $_SESSION['amount'] = $_POST['amount'];
        $_SESSION['currencytype'] = $_POST['currencytype'];

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
            <form method="POST" action="../controller/donationcheck.php?index=<?php echo $index ?>">
                <h1 style="color: black;">Select A Transaction Method</h1>
                <table style="padding: 30px;width: 80%">
                    <tr style="height: 70px;">
                        <td colspan="2" align="center">
                            <select name="tranmethod" style="height: 36px;font-size: 20px; width:180px;">
                                <option name="type" selected value="bKash">bKash</option>
                                <option name="type"  value="rocket">Rocket</option>
                                <option name="type" value="paypal">PayPal</option>
                                <option name="type" value="gopay">GoPay</option>
                            </select><br>
                        </td>
                    </tr>                    
                    <tr style="height: 70px;">
                        <td colspan="2" align="center">
                            <input type='text' placeholder="Credit Card Number" name='creditno' style="height: 30px;font-size: 20px; width:180px;"><br>
                        </td>
                    </tr>

                    <tr style="height: 70px;">
                        <td colspan="2" align="center">
                            <input type='text' min="1" placeholder="Mobile No" name='mobileno' value="+880"/ style="height: 30px;font-size: 20px; width:180px;"><br>
                        </td>
                    </tr>
<!--                     <tr style="height: 30px;">
                        <td colspan="2" align="center"><h4 style="height: 30px;font-size: 18px; width:260px;">SELECT TODAYS DATE</h4></td>
                    </tr> -->
                    <tr style="height: 70px;">
                        <td colspan="2" align="center">
                            <input type='date' name='donationdate' style="height: 30px;font-size: 20px; width:180px;"><br>
                        </td>
                    </tr>                    
                    <tr>
                        <td colspan="2" align="center">
                            <input type='submit' name="submit" value="Confirm" style="height: 36px;font-size: 20px; width:100px;"><br><br>
                        </td>
                    </tr>
                </table>
                    <a href="view_proposal.php?index=<?php echo $index ?>" style="font-size: 25px;">Go Back</a>
            </form>
        </center>
    </div>
</body>

    <?php
    }else{
    header('location:proposal_list.php');
}

}
    include('footer.php');
    ?>
