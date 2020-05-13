<?php
 require_once('core/start.php');
//echo Config ::DB_USER;
	$db = Database::connect();
	
	
	$sql = "SELECT * FROM korisnici WHERE ime = ?";
	//$korisnici->results;
	$korisnici = $db->query($sql, ['Bojana']);
	
	echo "<pre>";
	print_r($korisnici);
	echo "</pre>";
//	echo $korisnici->ime;
	
	/*	
	if($db->delete('korisnici', 7)){
		echo "uspelo";
	} else {
		echo "nije";
	}
	*/