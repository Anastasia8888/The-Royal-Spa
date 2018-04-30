<?php session_start();
require_once"lib/functions.php";
 ?>
<html>
<head>
	<title> Регистрация </title>
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
		<h1 align="center">Регистрация</h1>
    <form action="" method="POST" name="reg">
    	<?php
	if (!empty($_POST["button_reg"])) {
			$email=htmlspecialchars($_POST["email"]);
			$password_1=htmlspecialchars($_POST["password_1"]);
			$password_2=htmlspecialchars($_POST["password_2"]);
			if (strlen($email)<3) $success=false;
				elseif (strlen($password_1) <3) $success=false;
				elseif ($password_1 != $password_2) $success=false;
				else $success=addUser($email,md5($password_1));
			if (!$success) $alert="Ошибка при регистрации пользователя!";
				else $alert="Вы успешно зарегистрировались!";
			include "alert.php";
		}
?>
   
    <table align="center">
    	<tr>
    		<td>E-mail:</td>
    		<td> <input type="text" name="email"> </td>
    	</tr>
    	<tr>
    		<td>Пароль:</td>
    		<td> <input type="password" name="password_1"> </td>
    	</tr>
    	<tr>
    		<td>Подтвердите пароль:</td>
    		<td><input type="password" name="password_2"></td>
    	</tr>
    	<tr>
    		<td colspan="2"><input type="submit" name="button_reg" value="Зарегистрироваться"></td>
    	</tr>
    </table>
    </form>
	<div> <img src="images/фон.jpg" alt=""></div>
	</body>
	</html>