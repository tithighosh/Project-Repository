<?php
    $title = "Share To Social Media";
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
                        <a href="viewprofile.php" style ="color:    RosyBrown;"><?=$name?></a><br>
                        <a href='../controller/logout.php'style ="color:RosyBrown;">Log Out</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <center>
            <h1 style="color: black;"><?=$projectname?></h1>
            <h2 style="color: black;">Share Our Work</h2>
        </center>
    </div>
    <div id="main_content"style="padding: 30px">
        <center>
            <table width = 70% style="padding: 30px; font-size: 25px;font-family:Helvetica, sans-serif; ">
            <tr align="center" style="height: 50px;">
            <h3>
                <td style="width: 300px;"><a href="http://www.facebook.com/sharer.php?url=view_proposal.php" target="_blank" rel="nofollow">Share to Facebook</a></td>
            </h3>
            </tr>
            <tr align="center" style="height: 50px;">
                <h3>
                    <td style="width: 300px;"><a href="http://plus.google.com/sharer.php?url=view_proposal.php%3Findex" target="_blank" rel="nofollow">Share to Google+</a></td>
                </h3>
            </tr>
            <tr align="center" style="height: 50px;">
                <h3>
                    <td style="width: 300px;" ><a href="http://www.linkedin.com/shareArticle?mini=true&url=view_proposal.php%3Findex" target="_blank" rel="nofollow">Share to LinkedIn</a></td>
                </h3>
            </table>
        </center>
    </div><br><br>
<div style="background-color: LightGreen;">
    <?php
}
else{
    header('location:login.html');
}
    include('footer.php');
    ?>
</div>
