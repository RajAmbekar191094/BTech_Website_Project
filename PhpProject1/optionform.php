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
$ch1=$_SESSION['op1'];
$ch2=$_SESSION['op2'];
$ch3=$_SESSION['op3'];
$ch4=$_SESSION['op4'];
$ch5=$_SESSION['op5']; 

 $query = "INSERT INTO option_form(dbseatn,ch1,ch2,ch3,ch4,ch5)VALUES('$seatno','$ch1','$ch2','$ch3','$ch4','$ch5')";
 $result = mysql_query($query); 
 if($result) { header("location: HomePage.html"); } else { die('Error: '.mysql_error($con)); 
 
 } mysql_close($con);
        ?>
