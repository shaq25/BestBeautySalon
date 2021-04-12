


<?php
session_start();

 ?>

<!DOCTYPE html>

<head>
<title> My Project </title>

 <link rel="stylesheet" type="text/css" href="style.css">
 <style media="screen">
 
 </style>
</head>
<body style="background-image:url(images/salon.jpg)">
 <div class="loginbox">
  <img src ="images/login4.jpg" class ="avatar">

    <h1>Admin</h1>
	<form method="POST" action="Login.php">
	  <p>Username</P>
	  <input type="text" name="username" placeholder="Enter name" required="">
	  <p> Password</P>
	  <input type="password" name="password" placeholder="Enter Password" required="">

	  <input type="submit" name="" value="Login">

<label class="error">
      <?php

      if(isset($_SESSION['msg']))
      {

        echo$_SESSION['msg'];
        unset($_SESSION['msg']);
      }

       ?>

</label>
</form>


  </div>

</body>
</html>
