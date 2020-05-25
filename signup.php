<?php
	require_once('core/start.php');
	//$db = Database::connect();
	  $db = Database::connect();
      // validacija
        // login
		//redirect

    if (Input::exists('post')) {
        // validate data
        // if validate -> registration -> redirect
      Session::set('success', 'You  have been registared are loged in.');
       Redirect::to('login.php');
	}
?>
	
?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Limi blog | signup</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:wght@300;400;500;600;700;display=swap" rel="stylesheet">
	<link rel ="stylesheet" href="./css/style.css">
</head>	
 <body>
 <!--header--->
 
 <?php include('./templates/header.php'); ?>
 <section class="container-sm">
	<div class="login-box">
		<div class="login-form flex-center">
		<h2>Signuup</h2>
		<p class="my-5">User name:</p>
		<input class="form-field mb-5" type="text" name="user name">
		
		<p class="my-5">E-Mail Adress"</p>
		<input class="form-field mb-5" type="text" name="user name">
		
		<p class="my-5">Password:</p>
		<input class="form-field mb-5" type="password" name="password">
		
		<p class="my-5">Retype password:</p>
		
		<input class="form-field mb-5" type="password" name="retype">
		<div class="flex-center">
			<button class="btn">Submit</button>
		</div>
					<form method="POST" action="">
				</form>
			</div>
		</div>
	</section>
	<?php include('./templates/footer.php'); ?>
	<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous">
	</script>
 </body>
 </html>