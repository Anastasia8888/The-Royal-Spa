<?php
require_once "start.php";
$article=getArticle($_GET["id"]);
$id=$article["id"];
$title=$article["title"];
$full_text=$article["full_text"];
?>


<!DOCTYPE html> 
<html lang="ru"> 
<head> 
<meta charset="1251"> 
<link rel="stylesheet" type="text/css" href="STYLES/MAIN.css" />
<title>СТАТЬИ</title> 
</head> 
<body> 
<style>

a { 
    text-decoration: none; /* убираем подчеркивание*/
   } 
   
   </style>


<?php
  require_once "blocks/top.php";
?>


<?php
  require_once "blocks/full_article.php";
?>



<?php
  require_once "blocks/footer.php";
?>


</body> 
</html>




