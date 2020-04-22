<?php
	
	 function executeOuery($query) {
	 	// nama database  dan table
		$database = 'coffeeshop';
		$tableName = 'users';
		// database' password
		$password = '';
		// database server
		$host = 'localhost';
		// database username
		$user = 'root';		

		$connect = mysql_connect($host, $user, $password);

		if (!$connect) {
			die("Could not connect to the mySQL database");
		}
		
		mysql_select_db($database);	
		
		$result = mysql_query($query);	
		
		mysql_close($connect);

		return $result;
	}

?>