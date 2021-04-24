<?php
    $title = "Donate";
    include('header.php');
    $name = $_COOKIE['name'];
    $index = $_GET['index'];
    
if ($_COOKIE['flag'] == true) {

    require_once('../model/sql.php');
    $projectname = getProjectName($index);
    
?>
                <td align = "right" width="50%" class="lime">
                    <div style= "font-size:150%;">
                        <a href="homepage.php" style ="color:RosyBrown;"> Go to Home</a><br>
                        <a href="viewprofile.php" style ="color: RosyBrown;"><?=$name?></a><br>
                        <a href='../controller/logout.php'style ="color:RosyBrown;">Log Out</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="align-content: center;">
        <center>
            <form method="POST" action="selectionmethod.php?index=<?php echo $index ?>">
                <h1 style="color: black;">Donate for <?=$projectname?></h1>
                <table style="padding: 30px;width: 80%">
                    <tr style="height: 70px;">
                        <td colspan="2" align="center">
                            <input type='number' min="1" placeholder="Amount" name='amount' style="height: 30px;font-size: 20px; width:180px;"><br>
                        </td>
                    </tr>
                    <tr style="height: 40px;"><td colspan="2" align="center">
                            <h2>Select Currency Type</h2>
                        </td>
                    </tr>
                    <tr style="height: 70px;">
                        <td colspan="2" align="center">
                            <select name="currencytype" style="height: 36px;font-size: 20px; width:180px;">
                                <option name="type" selected value="taka">Taka</option>
                                <option name="type" value="usdollar">Dollar</option>
                                <option name="type" value="euro">Euro</option>
                                <option name="type"  value="rupee">Rupee</option>
                            </select><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type='submit' name="submit" value="Next" style="height: 36px;font-size: 20px; width:100px;"><br><br>
                        </td>
                    </tr>
                </table>
                    <a href="view_proposal.php?index=<?php echo $index ?>" style="font-size: 25px;">Go Back</a>
            </form>
        </center>
    </div>
<div style="background-color: LightGreen;">
    <?php
}
else{
    header('location:proposal_list.php');
}
    include('footer.php');
    ?>
</div>