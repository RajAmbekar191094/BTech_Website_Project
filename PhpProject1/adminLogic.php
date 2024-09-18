<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'details'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
?>

<html>
<body>
<pre><h2>
<a href="http://localhost/PhpProject1/logic.php" target="iframe_a">Allot seats</a>        <a href="http://localhost/PhpProject1/new.php" target="iframe_a">View Alloted Seats</a>            <a href="http://localhost/PhpProject1/DropAllot.php" target="iframe_a">CLEAR VIEW</a>
<h2></pre>
<iframe width="100%" height="500px" name="iframe_a"></iframe>


</body>
</html>