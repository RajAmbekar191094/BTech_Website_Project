<?php


$adminname = $_POST['adminname']; 
$password = $_POST['password']; 


if($adminname==Admin && $password==admin)
{header("location:adminLogic.php");}

else
{ header("location:AdminLogin.html");}
?>