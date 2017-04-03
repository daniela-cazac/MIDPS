<!DOCTYPE html>
<html>
<head>
	<?php require_once "blocks/head.php" ?>
</head>
<body>
    <?php require_once "blocks/header.php" ?>
	 <div id="wrapper">
	    <div id="leftCol">
		
		<form id="form">
		<input type="text" name="name" placeholder="Numele Dvs" required /><br />
		<textarea name="text"></textarea ><br />
		<button> Trimite </button>
		</form>
		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="common.js"></script>
		
		</div>
		<?php require_once "blocks/rightCol.php" ?>
	 </div>
	 
	 
</body>
</html>
