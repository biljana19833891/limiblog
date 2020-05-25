<?php
	require_once('core/start.php');
	//$db = Database::connect();
	   if (Input::exists('post')) {
        // validacija
        // login
		//redirect
      Session::set('success', 'You are loged in.');
       Redirect::to('index.php');
	}
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
		<div class="login-form flex-center">
		<h2>login</h2>
		<input type="text" name="email" placeholder="Email"/>
		
			<form method="POST" action="">
			<p class= "my-5">E-Mail Address::</p>
			<input class="form-field mb-5" type="text" name="email">
			<p class="my-5">Password:</p>
			<input class="formm-field mb-5" type="password" name="password">
			<button class="btn">Submit</button>
					</div>
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
