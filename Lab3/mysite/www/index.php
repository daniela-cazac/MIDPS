<!DOCTYPE html>
<html>
<head>
	<?php 
	require_once "blocks/head.php" ;
	require_once "functions/functions.php";
	
	?>
</head>
<body>
		<?php require_once "blocks/header.php" ?>
		
		<div id="wrapper">
			<div id="leftCol">
			
			
			
				<div id="bigArticle">
					<img src="/img/image1.jpg" alt="Articol_1" title="Articol_1">
					<h2>Primul meu articol</h2>
					<p>O mica calatorie in lumea mea!</p>
					<a href="/about.php"> 
					<div class="more">Mai departe</div>
					</a>
				</div>
				
				
			<div class="clear"><br></div>
			<div class="article"> 
			<img src="/img/muntejpg.jpg" alt="Articol_2" title="Articol_2">
					<h2>Escapada la munte</h2>
					<a href="/calatorii.php"> 
					<div class="more">Mai departe</div> </a>
			</div>
			<div class="article"> 
			<img src="/img/rochite.jpg" alt="Articol_3" title="Articol_3">
					<h2>Iubitoare de rochite</h2>
					<a href="/fashion.php"> 
					<div class="more">Mai departe</div> </a>
			</div>

		</div>
			<?php require_once "blocks/rightCol.php" ?>
		</div>
		
		<?php require_once "blocks/footer.php" ?>
		
	</body>
</html>
			