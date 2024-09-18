<?php
session_start();
//$_SESSION['seat_no']=$_POST['seatno'];
?>

<!DOCTYPE html>
<html>
    <head>
      <style>
body {
    background-image:url("Images/plain-design.jpg") ;
}
</style>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=7.0">
        <link rel="stylesheet" type="text/css" href="design.css">

    </head>
    <body>
<center><img src="Images/lock.png" style="width:200px;height:100px"></center>
        <fieldset>
            <center><legend><h1> LOGIN </center></h1></legend>
          <center><div id="login">Enter your User Name and Password <br><br><br>
                
            <form method="post" action="http://localhost/PhpProject1/conn.php"> 
            <label for="username">Seat Number:</label>
            <input type="text" id="username" name="seatno">
            <br><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br><br><br>
            <div id="lower">
            <input type="submit" value="Login">
            </div><!--/ lower-->
        </form>
        </div>
        </fieldset>
    </body>
</html>
