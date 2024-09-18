<?php
session_start();
//connecting to the database 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'details'); 
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database
$seatno = $_SESSION['seat_no']; 
$first_name = $_POST['first_name']; 
$last_name = $_POST['last_name']; 
$bday = $_POST['bday']; 
$email = $_POST['email']; 
$telephone = $_POST['telephone']; 
$Coll_Name = $_POST['Coll_Name']; 
$txt1 = $_POST['Physics']; 
$txt2 = $_POST['Chemistry']; 
$txt3 = $_POST['Mathematics']; 
$txt4 = $_POST['Total']; 
  $query = "INSERT INTO signup(dbseatno,dbfirstname,dblastname,dbdob,dbemail,dbtel,dbcollg,dbphysics,dbchemistry,dbmaths,dbtotal)VALUES('$seatno','$first_name','$last_name','$bday','$email','$telephone','$Coll_Name','$txt1','$txt2','$txt3','$txt4')";
 $result = mysql_query($query); 
 if($result)
     {
	header("location: optionalpage.php");
	 
     //echo "Successfully updated database"; 
     } 
     else { die('Error: '.mysql_error($con)); }
mysql_close($con);
?>
