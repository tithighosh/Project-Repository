<?php
	$title = "login";
	include('header.php');
	//include('nav_bar_b.php');
?>
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

	<body>

	<div >
		<center>
			<form  method="POST" action="../controller/logincheck.php"  >
				<fieldset style="width:350px">
					<legend><h3>LOGIN</h3></legend></h1>
					<strong>User Name</strong>
					<input type="text" name="uname" value="" placeholder="User Name"><br><br>
					<strong>Password </strong>
					<input type="password" name="password" value="" placeholder="Password"><br><br>
					<strong>User Type </strong>
					<select name="utype" style="width:162px; font-size: 14px; height:22px;">
              			<option name="type" value="Moderator">Moderator</option>
              			<option name="type" value="Initiator">Project Initiator</option>
              			<option name="type" value="Donor">Donor</option>
              			<option name="type" selected value="Admin">Admin</option>
          			</select><br>
					<br><input type="checkbox" name="remember">Remember Me<br><br>
					<b><input type="submit" name="submit" value="LOGIN to HOPE"></b><br><hr>
					<a href="forgotpass.php">Forgot Passsword?</a><br><hr>
					
					<a href="registration.php">Register First</a></label>
				</fieldset>
				<h4><a href="startpage.html">Back To Homepage</a>
			</form>
		</center>

  <?php

  include('footer.php');
  ?></div>
</h4>
</form>
</center>
</div>
</body>