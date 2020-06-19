<!DOCTYPE html>
<html>
<head>
	<title>SI Music Player Novi</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
	<link href="<?php echo ASSET; ?>images/favicon.ico" rel="shortcut icon">
</head>
<body>
	<div class="container">
		<div class="banner">
			<img src="layout/assets/images/background playmoo.jpg">
		</div>

		<div class="menu">
			<a href="index.php">Home</a>
			<a href="index.php?page=index_album">Album</a>
			<a href="index.php?page=index_login">Login</a>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "index_main.php";
			}

			?>

		</div>

		<div class="footer">
			Copyright 2020. SI Music Player Novi
		</div>
	</div>
</body>
</html>