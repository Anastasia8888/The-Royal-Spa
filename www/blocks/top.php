<div id=header> 
	<div id=header_inner> 
		<div style="margin-top: 0px; height: 50px;">
			<?php 
			if (checkUser($_SESSION["email"],$_SESSION["password"])) 
				require_once "blocks/user_panel.php";
			else require_once "blocks/auth_form.php";
			?>
		</div>
		<br> <br>
		<nav align="center">  
			<a href ="../index.php"> <font size=3 color="black" face="book antiqua"> яою-нрекэ &nbsp &nbsp &nbsp &nbsp </font> </a>  
			<a href ="#"> <font size=3 color="black" face="book antiqua"> опедкнфемхъ &nbsp &nbsp &nbsp &nbsp </font> </a>  
			<a href ="#"> <font size=3 color="black" face="book antiqua"> ябюдэаш &nbsp &nbsp &nbsp &nbsp </font> </a> 
			<a href ="../guestbook.php"> <font size=3 color="black" face="book antiqua"> нргшбш &nbsp &nbsp &nbsp &nbsp </font> </a> 
		</nav> 
		<div> 
			<h2 align="center"><font face="book antiqua"> THE ROYAL-SPA</font></h2> 
			</div> 
	</div> 
</div>