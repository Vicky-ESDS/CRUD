<?php
    $host = 'db';

	$user = 'MYSQL_USER';

//database user password
	$pass = 'MYSQL_PASSWORD';

// database name
	$mydatabase = 'MYSQL_DATABASE';
	$conn = mysqli_connect($host, $user, $pass, $mydatabase);
?>