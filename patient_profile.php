<!DOCTYPE html>
<html>
<head>
	<title>Prescription management system</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class= "navbar">
		<a href="index.php" class="logo">PMS</a>
			<ul class="nav">

				<li><a href="index.php">HOME</a></li>
				
				<li><a href="doclogin.php">DOCTOR</a></li>
				<li><a href="patientlogin.php">PATIENT</a></li>
				<li><a href="users.php">USERS</a></li>
<li><a href="users_for_doc.php">USERS (d)</a></li>
			</ul>
	</div>
	<div >
		<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('connection.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		echo "str: ".$str;
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM patients WHERE username='$username' AND password='$password'";
	$result=mysqli_query($bd, $qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			$_SESSION['SESS_LAST_NAME'] = $member['password'];
			session_write_close();
			header("location: users.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'user name and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}



?>
		
	</div>	


	

</body>
</html>




				
			
				

				
				
				
				
				
							
				
				
			
