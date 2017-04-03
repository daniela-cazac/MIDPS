<!DOCTYPE html>
<html>
<head>
	<?php 
	require_once "functions/functions.php";
	 $news = getNews(1, $_GET["id"]);
	require_once "blocks/head.php" ?>
</head>
<body>
		<?php require_once "blocks/header.php" ?>
		<div id="wrapper">
			<div id="leftCol">
				<?php
			echo '<div class="bigArticle"><img src="/img/articles/'.$news["id"].'.jpg" alt="article '.$news[$i]["id"].'" title="article '.$news[$i]["id"].'">
	                          <h2>'.$news["title"].' </h2>
    <p>'.$news["full_text"].' </p>
		   </div>';
		?>
			
		</div>
			<?php require_once "blocks/rightCol.php" ?>
		</div>
		
		<?php require_once "blocks/footer.php" ?>
		
	</body>
</html>
			