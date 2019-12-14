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
				<li><a href="users.php">Users</a></li>
<li><a href="users_for_doctor.php">USERS (d)</a></li>
			</ul>
	</div>

<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "demo_p_m_s");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    // Escape user inputs for security
   
	
	
	
	
	$username=mysqli_real_escape_string($link,$_REQUEST['username']);
	$fname=mysqli_real_escape_string($link,$_REQUEST['fname']);
	$lname=mysqli_real_escape_string($link,$_REQUEST['lname']);
	$address=mysqli_real_escape_string($link,$_REQUEST['address']);
	$password=mysqli_real_escape_string($link,$_REQUEST['password']);
	
//insert value into patient table
	 $sql = "INSERT INTO patients (username,fname,lname,address,password)
	 VALUES ( '$username','$fname','$lname','$address','$password')";
//insert value into student table


if(mysqli_query($link, $sql)){


         

		
	

    } else{

       

    }

     
	 
     
	 
    

  mysqli_close($link);

  

?>
<div class="about-area" id="about">
		<div class="text-part">
			<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "demo_p_m_s");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    // Escape user inputs for security
   
	
	
	
	
	$username=mysqli_real_escape_string($link,$_REQUEST['username']);
	$fname=mysqli_real_escape_string($link,$_REQUEST['fname']);
	$lname=mysqli_real_escape_string($link,$_REQUEST['lname']);
	$address=mysqli_real_escape_string($link,$_REQUEST['address']);
	$password=mysqli_real_escape_string($link,$_REQUEST['password']);
	
//insert value into patient table
	 $sql = "INSERT INTO patients (username,fname,lname,address,password)
	 VALUES ( '$username','$fname','$lname','$address','$password')";
//insert value into student table


if(mysqli_query($link, $sql)){


         

		
	

    } else{

       

    }

     
	 
     
	 
    

  mysqli_close($link);

  

?>
		
	   	</div>

	</div>
	<p> <a href="index.php"><font color="blue">back</a></p>
</body>
</html>