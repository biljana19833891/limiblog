<?php

	session_start();
	
	// autoloader
	spl_autoload_register(function($class) {
		require_once 'classes/' . $class . '.php';
	});
	
?>