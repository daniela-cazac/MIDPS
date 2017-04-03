<!DOCTYPE html>
<html>
<head>
     <?php require_once "blocks/head.php" ?>
	
</head>
<body>
    <?php require_once "blocks/header.php" ?>
	 <div id="wrapper">
	    <div id="leftCol">
		<?php
		$connect = mysql_connect('localhost','root','') or die(mysql_error());
		mysql_select_db('mysitebase');
		
	    if(isset($_POST['submit'])) {
			$username = $_POST['username'];
			$login = $_POST['login'];
			$password = $_POST['password'];
			$r_password = $_POST['r_password'];
				$password = md5($password);
				$query = mysql_query("INSERT INTO users VALUES('', '$username', '$login', '$password')") or die(mysql_error());
			
			
				
		}
		
		?>
		<form method="post" action="reg.php">
		<input type="text" name="username" placeholder="| Username" required/> <br>
		<input type="text" name="login" placeholder="| Login" required/> <br>
		<input type="password" name="password" placeholder="| Password" required /> <br>
		<input type="password" name="r_password " placeholder="| Repeat Password" required /> <br>
		<input type="submit" name="submit" value="Inregistrare" />
		</form>
		</div>
		
			<?php require_once "blocks/rightCol.php" ?>
		</div>
		
		<?php require_once "blocks/footer.php" ?>
		
	</body>
	 
</body>
</html>
