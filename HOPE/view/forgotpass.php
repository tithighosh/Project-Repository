<?php
	$title = "Forgot Password";
	include('header.php');
?>
</head><style>
body{
  background-image: url('bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<h1 style= "font-size:300%;color:darkblue"><img src="hope.jpg" height="40" width="50">HOPE</h1>
<div>
	<table width="100%">
            <tr>
                <td align = "right" width="50%">  
                    <div style= "font-size:150%;">
                        <a href='../controller/logout.php'style ="color:RosyBrown;">Back To Login</a>
                    </div>

                </td>
            </tr>
        </table>
    </div>
	<div >
		<center>
			<form method="POST" action="../controller/forgotpasscheck.php" >
				<h2 style="color: black;">Set A New Password:</h2>
                <table>
                	<tr>
                        <td>
                            <input type='text'  placeholder="User Name" name='uname' style="height: 30px;font-size: 20px; width:180px;">
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                    <tr>
                        <td>
                            <input type='password' placeholder= "New Password" name='newpass' style="height: 30px;font-size: 20px; width:180px;">
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                    <tr>
                        <td>
                            <input type='password' placeholder="Retype Password" name='conpass' style="height: 30px;font-size: 20px; width:180px;">
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                </table>
                <input type='submit' name="submit" value="Confirm" style="height: 30px;font-size: 20px; width:120px;"><br><br>
			</form>
		</center>
	</div>
	<?php 
	   include('footer.php');
	?>
    </div>