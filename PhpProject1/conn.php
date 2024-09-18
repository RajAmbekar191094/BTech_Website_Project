<?php 
define('DB_HOST', 'localhost');
define('DB_NAME', 'details'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

$rno=$_SESSION['seat_no'];
$result=mysql_query("select * from `details`.allot where seatno='$rno'");
if(mysql_num_rows($result)==1)
{header("location:allocation.php");}

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 

$seatno=addslashes($_POST['seatno']); 
$password=addslashes($_POST['password']); 


$sql="SELECT * FROM newuser WHERE dbseatno='$seatno' and dbpassword='$password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$_SESSION['seat_no']=$seatno;

header("location: SignPage.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>