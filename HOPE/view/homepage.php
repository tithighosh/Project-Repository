<?php
$title = "Home Page";
include('header.php');
$name = $_COOKIE['name'];
if ($_COOKIE['flag'] == true) {

?>
<style>
    body{
        background-image: url('girls_smiling.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
    }
</style>
<h1 style= "font-size:300%;color:darkblue"><img src="hope.jpg" height="40" width="50">HOPE</h1>

</head>
<body>
    <div style="padding:30px">
        <table width="100%">
            <tr>
                
                <td align = "right" width="50%" class="lime">
                    <div style= "font-size:150%;">
                        <a href= 'mv.php' style ="color:RosyBrown;">Our Mission & Vission</a><br><br>
                        <!--<a href= "donate_homepage.php" style ="color:RosyBrown;">Donate For A Project</a><br>-->
                        
                        <a href="viewprofile.php" style ="color:    RosyBrown;">My Profile: <?=$name?></a><br><br>

                        <a href="viewdetails.php"style ="color:RosyBrown;">View Members</a><br><br>

                        <a href="index.html"style ="color:RosyBrown;">Search Anyone</a><br><br>

                        <a href='../admin/dashboard.html'style ="color:RosyBrown;">Dashboard</a><br><br>

                        <a href='../controller/logout.php'style ="color:RosyBrown;">Log Out</a>

                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <center>
            <table>
                
    <div>
        <center>
        <table style="padding:50px; height:200px;font-size:180%;" width="70%">
            <tr><strong>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <td align="left"><a href='aboutus.php'style ="color:black;"></a></td>
                <td align="center"><a href='blogs.php' style ="color:black;"></a></td>
                <td align="right"><a href='contactus.php' style ="color:black;"></a></td>
            </strong></tr><br><br><br>
        </table>
        </center>
    </div>
</body>
<?php
}
   else
    {
        header('location: login.php');
    }
    include('footer.php');
    ?>
