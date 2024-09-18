<?php
session_start();
$rno=$_SESSION['seat_no'];
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'details'); 
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

$result=mysql_query("select * from `details`.signup where dbseatno='$rno'");
if(mysql_num_rows($result)==1)
{header("location:optionalpage.php");}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
<style>
body {
    border:1px solid grey;
}
div {
    background-color: lightgrey;
    width: 600px;
    padding: 20px;
    border: 25px solid navy;
    margin: 25px;
}
</style>
    </head>
    <body>
        <div><H1><u>Enter your details</u></H1>
        <form name="htmlform" method="post" action="http://localhost/PhpProject1/signup.php">
<table width="450px">
     
 <tr>
 <td valign="top">
  <label for="seatno">Seat Number<sup></sup></label>
 </td>
 <td valign="top">
     <?php echo $_SESSION['seat_no']; ?>
 </td>
</tr>	 
      <tr>
 <td valign="top">
  <label for="first_name">First Name<sup>*</sup></label>
 </td>
 <td valign="top">
     <input  id="first_name" type="text" name="first_name" maxlength="50" size="30" required>
 </td>
</tr>
 
<tr>
 <td valign="top">
  <label for="last_name">Last Name </label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>

<tr>
    <td>
        Date of Birth<sup>*</sup>:</td>
    <td> <input type="date" name="bday" required>
    </td></tr>

<tr>
 <td valign="top">
  <label for="email">Email Address </label>
 </td>
 <td valign="top">
  <input  type="email" name="email" maxlength="80" size="30">
 </td>
 </tr>

 <tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="Coll_Name">College Name* </label>
 </td>
 <td valign="top">
  <input  type="text" name="Coll_Name" maxlength="30" size="30" required>
 </td>
</tr>

<tr> 
    <td colspan="2"> <b> Enter CET Score : </b> </td>
</tr>

<tr>
    <td valign="top">
  <label for="Physics">Physics*</label>
 </td>
 <td valign="top">
  <input id="txt1" type="text" name="Physics" maxlength="30" size="30" required onkeyup="validate();" >
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="Chemistry">Chemistry* </label>
 </td>
 <td valign="top">
  <input id="txt2" type="text" name="Chemistry" maxlength="30" size="30" required onkeyup="validate();" >
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="Mathematics">Mathematics* </label>
 </td>
 <td valign="top">
  <input id="txt3" type="text" name="Mathematics" maxlength="30" size="30" required onkeyup="validate();" >
 </td>
</tr>

<tr>
 <td valign="top">Total</td>
 <td valign="top">
  <input id="txt4" type="text" name="Total" size="30" >
 </td>
</tr>

    
<tr>
 <td colspan="2" style="text-align:center">
  Proceed to fill optional form  
  <input type="submit" value="Proceed">  
 </td>
</tr>
</table>
</form>

<script type="text/javascript">
function validate() {            
    var FieldVal = document.getElementById('txt1').value;                 
    if(FieldVal >100) {           
        alert("Enter Valid Score !!");     
    } else {    sum();  } 
	 
	 var FieldVal = document.getElementById('txt2').value;                 
    if(FieldVal >100) {           
        alert("Enter Valid Score !!");       
    } else {    sum();    } 
	
	 var FieldVal3 = document.getElementById('txt3').value;                 
    if(FieldVal3 >100) {           
        alert("Enter Valid Score !!");       
    } else {    sum();    } 
}

function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
            var txtSecondNumberValue = document.getElementById('txt2').value;
            var txtThirdNumberValue = document.getElementById('txt3').value;
            var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue)+parseInt(txtThirdNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt4').value = result;
            }
        }
        </script>
        </div>
    </body>
</html>
