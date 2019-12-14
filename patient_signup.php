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
		<div class="box">
			<h2>Sign Up</h2>
			<form action="only_patient_profile.php" method="post">
				<input type="text" name="username" placeholder="Email">
				<input type="text" name="fname" placeholder="First name">
				<input type="text" name="lname" placeholder="Last name">
				<input type="text" name="address" placeholder="Address">
				
				<input type="password" name="password" placeholder="password"><br>
				
			    <br>
				<input type="submit" name="" value="Sign Up"><br>
				<a href="patientlogin.php">Already a member?</a>

				

				
			</form>
			
			
			
		</div>
		
	</div>	

		
</body>
</html>