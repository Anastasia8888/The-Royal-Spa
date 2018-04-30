	<?php 
	if ($_SESSION[error_auth]){
		unset ($_SESSION[error_auth]);
		$alert="Неверные e-mail и/или пароль!";
		include "alert.php";}
		?>
	<form name="auth" action="auth.php" onsubmit="return checkEmail(this.email.value)" method="POST">
		<div class="form">
			<span style="color: white;">E-mail:</span>
				<input type="text" name="email" />
				<span style="color: white;">Password:</span>
					<input type="password" name="password"  />
					<input  type="submit" name="button" value="Sign in" />
					<a href="reg.php"><input type="button" name="buttonreg"  value="Sign up"/></a>
				</div>
			</form>