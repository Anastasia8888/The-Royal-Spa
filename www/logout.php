<?php 
session_start();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
header("Location: ".$_SESSION["HTTP_REFERER"]);
exit;
 ?>