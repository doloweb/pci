<?php
	@session_start();
	
	define('HOST', 'localhost');
	
	//define('DB_USERNAME', 'root');
	//define('DB_PASSWORD', '');
	//define('DATABASE', 'helpline');
	
	define('DB_USERNAME', 'samshira_pci');
	define('DB_PASSWORD', 'pci123');
	define('DATABASE', 'samshira_helpline');
	
	$link = mysql_connect( HOST, DB_USERNAME, DB_PASSWORD ) or die("Can't connect with host!");
	$db_ref = mysql_select_db( DATABASE, $link ) or die("Can't connect with databse!");
?>