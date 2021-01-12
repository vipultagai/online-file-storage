<?php
$cookiename          =  "anantsangrahuserdetails";
$anantsangrahvalue   =  "";
setcookie($cookiename,$anantsangrahvalue, time() + (-1000), "/");
header("Location:index.php"); 
?>