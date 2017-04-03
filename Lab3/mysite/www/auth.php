<!DOCTYPE html>
<html>
<head>
     <?php 

	 require_once "blocks/head.php" ;
	 ?>
	
</head>
<body>
   <?php require_once "blocks/header.php" ?>
	 <div id="wrapper">
	    <div id="leftCol">
		<?php
		$connect = mysql_connect('localhost','root','') or die(mysql_error());
		mysql_select_db('mysitebase');
		if(isset($_POST["enter"]));{
		$login = $_POST["e_login"];
		$password = md5($_POST["e_password"]);
		
		$query = mysql_query("SELECT * FROM users WHERE login = '$e_login'");
		$user_data = mysql_fetch_array($query);
		
		}
		?>
		<form method="post" action="auth.php">
		<input type="text" name="e_login" placeholder="| Login" required/> <br>
		<input type="password" name="e_password" placeholder="| Password" required /> <br>
		<input type="submit" name="enter" value="Intra" />
		</form>
		
		</div>
		
		   <?php require_once "blocks/rightCol.php" ?>
		   
		</div>
	
	 
	 <?php require_once "blocks/footer.php" ?>
</body>
</html>
