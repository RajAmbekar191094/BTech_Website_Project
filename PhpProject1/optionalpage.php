<?php
session_start();
$rno=$_SESSION['seat_no'];
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'details'); 
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

$result=mysql_query("select * from `details`.allot where seatno='$rno'");
if(mysql_num_rows($result)==1)
{header("location:allocation.php");}

if($_SERVER["REQUEST_METHOD"]=="POST")
{$_SESSION['op1']=$_POST['output'];
$_SESSION['op2']=$_POST['output1'];
$_SESSION['op3']=$_POST['output2'];
$_SESSION['op4']=$_POST['output3'];
$_SESSION['op5']=$_POST['output4'];
header("location: optionform.php");
}
?>
<html>
<head>
<style>

li:nth-child(2n+1) {
   background-color:#CCCCFF;
    padding: 0.7em 0.7em;
    margin-right: 100px;
    -webkit-transition: all 2s ease;
}
li:nth-child(2n) {
    background: #808080;
    padding: 0.7em 0.7em;
    margin-right: 80px ;
     -webkit-transition: all 2s ease;
}

li:nth-child(1):hover
{
color: #fff;
background-color:#660033;

-webkit-transform: scale(1.2,1.2) ;

}
li:nth-child(2):hover
{
color: #fff;
background-color:#808080;
-webkit-transform: scale(1.2,1.2) ;
}


li:nth-child(3):hover
{
color: #fff;
background-color: #660033;
-webkit-transform:  scale(1.2,1.2);

}
li:nth-child(4):hover
{
color: #fff;
background-color: #808080;
-webkit-transform:  scale(1.2,1.2);
}
li:nth-child(5):hover
{
color: #fff;
background-color: #660033;
-webkit-transform:  scale(1.2,1.2);

}


ul li { display: inline-block; }



ul li a
{
text-decoration: none;

color: #000;
}

p:first-line
{
 color:black;
}
body {
background-image: url("Images/wooden-background.jpg") ;
}
</style>


</head>

<body >
<br><br><center><div><font size="6">COLLEGE PREFERENCE</font></div></center>
<ul><font size='5px'>
<body background-image: url(http://www.siesgst.edu.in/images/advt/sies.png);style="width:200px;height:100px"><br><br><br>

<center><li><a href="http://http://www.siesgst.edu.in/">SIES</a></li>

<li><a href="http://vjti.ac.in/">VJTI</a></li>

<li><a href="http://www.rait.ac.in/">RAIT</a></li>
<li><a href="http://www.spit.ac.in/">SPIT</a></li>
<li><a href="http://www.vit.edu.in/">VIT</a></li></center>


<form action="" method="post">
    <select name='location' size='1' onchange="handleSelect(this.form)">

	<option ><font size="5">Select College</option></font>
        <option value="VJTI">VJTI</option>
        <option value="SIES GST">SIES GST</option>
        <option value="SPIT">SPIT</option>
          <option value="RAIT">RAIT</option>
         <option value="VIT">VIT</option>
    </select>

<p><font size="5">Your first choice: <input type="text" name="output" id="output"></p>
<p>Your second choice: <input type="text" name="output1" id="output1"></p>
<p>Your third choice : <input type="text" name="output2" id="output2"></p>
<p>Your fourth choice: <input type="text" name="output3" id="output3"></p>
<p>Your fifth choice : <input type="text" name="output4" id="output4"></p>
<input type="submit">
 </form>
<script>
i=1;
function handleSelect(myForm)
{
    
	if(i==1){classCode = myForm.location.value;
    document.getElementById('output').value = classCode;i=2;exit}
	if(i==2){
	classCode = myForm.location.value;
    document.getElementById('output1').value = classCode;i=3;exit}
	if(i==3){
	classCode = myForm.location.value;
    document.getElementById('output2').value = classCode;i=4;exit}
		if(i==4){
	classCode = myForm.location.value;
    document.getElementById('output3').value = classCode;i=5;exit}
		if(i==5){
	classCode = myForm.location.value;
    document.getElementById('output4').value = classCode;i=8;}
	
alert(ch);

   
}
</script>

</body>
</html>
