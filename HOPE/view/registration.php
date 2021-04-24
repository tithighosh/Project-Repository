<?php
  $title = "registration";
  include('header.php');
  //include('nav_bar_b.php');
?>

<head>
  <script src = "./js/script.js"></script>


<style>
body{
  background-image: url('bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<h1 style= "font-size:300%;color:darkblue"><img src="hope.jpg" height="40" width="50">HOPE</h1>

        <td align = "right" width="50%">  
            
        </td>
      </tr>
    </table>
  </div>
  <div >
    <center>
      <form name="myForm" method="POST" action="../controller/regcheck.php" onsubmit="return validateform()"  >
        <fieldset style="width:350px; height: 450px;">
                  <legend><h1>Registration</h1></legend></h1><br><br>
          <input type="text" name="name" placeholder="Name" value=""><br>
          <h4></h4>
          <input type="text" name="uname" placeholder="User Name" value="" />   <br>
          <h4></h4>
          <input type="text" name="email" placeholder="Email" value="" />   <br>
          <h4></h4>
          <input type="password" name="pass" placeholder="Passsword" value=""><br>
          <h4></h4>
          <input type="password" name="cpass" placeholder="Confirm Passsword" value=""><br>
          <h4></h4>
          <select name="utype" style="width:162px; font-size: 14px; height:22px;">
              <option name="type" value="Moderator">Moderator</option>
              <option name="type" value="Initiator">Project Initiator</option>
              <option name="type" value="Donor">Donor</option>
              <option name="type" selected value="Admin">Admin</option>
          </select><br>
          <h4></h4>
          <input type="submit" name="submit" id="submit" class="btn btn-info" value="Create Account"><br><hr>

          <b><a href="login.php">Login</a></b>
          
          <br><br>
         
        </fieldset>
        <a href="../assets/html/terms.html">Terms & Conditions</a></label>|
        <a href="../assets/html/privatepolicy.html">Private Policy</a></label>|
        <a href="../assets/html/about.html">About Us</a></label>|
        <a href="../assets/html/help.html">Help</a></label><br>


        <h4><a href="startpage.html">Back To Homepage</a>

      </form>
    </center>
  </div>
  <div >
</head>
  <?php

  include('footer.php');
  ?></div>

