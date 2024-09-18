
<?php
//connecting to the database 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'details'); 
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database
 $seatno = $_POST['seatno']; 
 $password = $_POST['password']; 
 $query = "INSERT INTO newuser(dbseatno,dbpassword)VALUES('$seatno','$password')";
 $result = mysql_query($query); 
 if($result) 
 {
	 header("location:Homepage.html");
	 
} else { die('Error: '.mysql_error($con)); 
 
 } mysql_close($con);
?>
