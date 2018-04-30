<?php
require_once "start.php";
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
  require_once "blocks/list_articles.php";
?>



<?php
  require_once "blocks/footer.php";
?>


</body> 
</html>
