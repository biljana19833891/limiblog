<?php

	require_once('core/start.php');
	$db = Database::connect();
?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Limi blog | login </title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:wght@300;400;500;600;700;display=swap" rel="stylesheet">
	<link rel ="stylesheet" href="./css/style.css">
</head>	
 <body>
 <!--header--->
 
 <?php include('./templates/header.php'); ?>
 <section class="container-sm">
	<div class="login-box">
		<div class="login-form">
		<h1>Subscribe Here for Updates</h1>
		<input type="text" name="email" placeholder="Email"/>
		<input type="subscribe" name="subbscribe" placeholder="Subscribe"/>
			<form method="POST" action="">
				</form>
			</div>
		</div>
	</section>
 </body>
 </html>
