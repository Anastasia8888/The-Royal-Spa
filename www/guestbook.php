<?php session_start();
require_once"lib/functions.php";
?>
<html>
<head>
	<title>Отзывы</title>
	<meta charset="1251">
	<link rel="stylesheet" type="text/css" href="STYLES/MAIN.css" />
	<style>
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<?php
	require_once "blocks/top.php";
	?>
	<div align="center">
<img src="images/фон.jpg" alt="hotel" id="img"></div>
	<?php
	require_once "blocks/guestbook.php";
	?>
	<h2 align="center">Отзывы</h2>
	<div align="center">
		<?php 
		if (!empty($_POST ["button_guestbook"])){
			$name=htmlspecialchars($_POST["name"]);
			$comment=htmlspecialchars($_POST["comment"]);
			if ((strlen($name)<3)||(strlen($comment)<3)) $success=false;
			else $success=addGuestBookComment($name,$comment);
			if (!success){
				$alert="Ошибка при добавлении новой записи!";
				include "alert.php";
			}
		}
		$comments=getAllGuestBookComments();
		for ($i=0; $i <count($comments) ; $i++) { 
			$name=$comments[$i]["name"];
			$comment=$comments[$i]["comment"];
			include "blocks/guestbook_comment.php";
		}
		?>
	</div>
	<div>
		<?php
		require_once "blocks/footer.php";
		?>

	</div>
</body>
</html>
