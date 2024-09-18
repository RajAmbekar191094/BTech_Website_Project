
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'details'); 
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$sql = 'SELECT seatno, Name, allot FROM allot';

mysql_select_db('details');
$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

echo '<table>
    <tr>
        <th>SEAT NO.</th>
        <th>NAME</th>
		<th>ALLOTMENT</th>
    </tr>';

while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
  
    echo '
        <tr>
            <td>'.$row['seatno'].'</td>
            <td>'.$row['Name'].'</td>
			<td>'.$row['allot'].'</td>
        </tr>';

}

echo '
</table>';
mysql_close($con);

?>

 </body>
</html>
