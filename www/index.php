<?php
session_start();
require_once "lib/functions.php";
?>
<!DOCTYPE html> 
<html lang="ru"> 
<head> 
<meta charset="1251"> 
<link rel="stylesheet" type="text/css" href="STYLES/MAIN.css" />
<title>ROYAL SPA</title> 
</head> 
<body> 
<style>

a { 
    text-decoration: none; /* отменить подчеркивание ссылки*/
   } 
   
 </style>
<?php
  require_once "blocks/top.php";
?>
<div> <img src="images/фон.jpg" alt="Изображение"></div>
<?php
  require_once "blocks/list_articles.php";
?>
<?php
  require_once "blocks/footer.php";
?>


</body> 
</html>
