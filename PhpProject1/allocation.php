<?php
session_start();
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'details'); 
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
?>

<html>
    <head>
	 <title>RESULTS</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css" />

 </head>
    <body style='background-image:url("Images/rajbg.png");background-position:center;background-repeat:no-repeat;'>
<center><img src="Images/top.jpg" style="width:800px;height:100px"></center><br><br><br>
<font size="7"><center>Engineering Admission 2015-2016.</center></font>
<meta charset="UTF-8"><bd><br><br>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><META http-equiv="Content-Type" content="text/html; charset=utf-8">

<div>

<div style="background-color:"#FFCCCC";color:white;padding:20px">

</div>

</body>

</html>

<div style="background-color="#FFCCCC";color:white;padding:10px">
  <div>
  
 <?php
$rno = $_SESSION['seat_no']; 
$result=mysql_query("select * from allot where seatno='$rno';");?>
 <font size="6"><center>CONGRATULATIONS</center></font> <br></
 bgcolor="#FFCCCC"> 
 <center>You are Alloted to : </center>
 
<?php echo mysql_fetch_array($result)[2];?>


</div>
</div> 
</div>
</body></html>

        <br> <br>
     
    </body>
</html>

   </div>
    </body>
</html>

   </div>
    </body>
</html>
