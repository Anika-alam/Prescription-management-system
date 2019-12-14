<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Prescription management system</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
	<div class= "navbar">
		<a href="index.php" class="logo">PMS</a>
			<ul class="nav">

				<li><a href="index.php">HOME</a></li>
					
				
				
				<li><a href="doclogin.php">DOCTOR</a></li>
				<li><a href="patientlogin.php">PATIENT</a></li>
				<li><a href="users.php">USERS</a></li>
<li><a href="users_for_doctor.php">USERS (d)</a></li>
			</ul>
	</div> 
	<div class="banner-area" id="home">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
		<div class="box">
			<h2>Sign in for doctors</h2>
			<form action="doctor_profile.php" method="post">
				<?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
				 <input name="username" type="text" placeholder="username"><br>
				<input name="password" type="password" placeholder="password"><br>
				 <label>
                 <font color="white"><input type="checkbox" checked="checked" name="remember"> Remember me
    </label><br>
				<input type="submit" name="" value="Sign in"><br>
				
			
			
			
		</div>
		
	</div>	

		
</body>
</html>