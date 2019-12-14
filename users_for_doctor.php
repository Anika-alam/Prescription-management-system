
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

	<div class="about-area" id="about">

		<div class="text-part">
			

			<?php
			require_once('auth_doctor.php');

echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>First Name</th><th>Last Name</th></tr>";
class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo_p_m_s";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
	$stmt = $conn->prepare("SELECT fname, lname from doctors "); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}






?>

		
	   	</div>
	   	<p> <a href="logout.php"><font color="blue">logout</a><a href="patient.php"><font color="blue">patients</a></p>
	</div>

	</body>
	</html>