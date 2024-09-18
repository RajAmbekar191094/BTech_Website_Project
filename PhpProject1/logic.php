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
$o1=0;
$o2=0;
$o3=0;
$o4=0;
$o5=0;
$result=mysql_query("create table allot (seatno varchar(2),Name varchar(20),allot varchar(8));");
$result=mysql_query("select * from ranks;");
while($row=mysql_fetch_array($result))
{
	if($row['ch1']=="VJTI" && $o1<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch1']."')");$o1++;continue;}
	if($row['ch1']=="SIES GST" && $o2<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch1']."')");$o2++;continue;}
	if($row['ch1']=="RAIT" && $o3<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch1']."')");$o3++;continue;}
	if($row['ch1']=="SPIT" && $o4<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch1']."')");$o4++;continue;}
	if($row['ch1']=="VIT" && $o5<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch1']."')");$o5++;continue;}
	if($row['ch2']=="VJTI" && $o1<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch2']."')");$o1++;continue;}
	if($row['ch2']=="SIES GST" && $o2<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch2']."')");$o2++;continue;}
	if($row['ch2']=="RAIT" && $o3<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch2']."')");$o3++;continue;}
	if($row['ch2']=="SPIT" && $o4<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch2']."')");$o4++;continue;}
	if($row['ch2']=="VIT" && $o5<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch2']."')");$o5++;continue;}
	if($row['ch3']=="VJTI" && $o1<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch3']."')");$o1++;continue;}
	if($row['ch3']=="SIES GST" && $o2<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch3']."')");$o2++;continue;}
	if($row['ch3']=="RAIT" && $o3<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch3']."')");$o3++;continue;}
	if($row['ch3']=="SPIT" && $o4<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch3']."')");$o4++;continue;}
	if($row['ch3']=="VIT" && $o5<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch3']."')");$o5++;continue;}
	if($row['ch4']=="VJTI" && $o1<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch4']."')");$o1++;continue;}
	if($row['ch4']=="SIES GST" && $o2<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch4']."')");$o2++;continue;}
	if($row['ch4']=="RAIT" && $o3<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch4']."')");$o3++;continue;}
	if($row['ch4']=="SPIT" && $o4<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch4']."')");$o4++;continue;}
	if($row['ch4']=="VIT" && $o5<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch4']."')");$o5++;continue;}
	if($row['ch5']=="VJTI" && $o1<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch5']."')");$o1++;continue;}
	if($row['ch5']=="SIES GST" && $o2<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch5']."')");$o2++;continue;}
	if($row['ch5']=="RAIT" && $o3<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch5']."')");$o3++;continue;}
	if($row['ch5']=="SPIT" && $o4<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch5']."')");$o4++;continue;}
	if($row['ch5s']=="VIT" && $o5<5)
	{$tmp=mysql_query("insert into allot values('".$row['dbseatno']."','".$row['dbfirstname']."','".$row['ch5']."')");$o5++;continue;}
	
}

