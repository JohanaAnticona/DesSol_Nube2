<?php

	function conexion(){

	$host = "containers-us-west-98.railway.app";
	$port = "7753";
	$dbname = "railway";
	$user = "postgres";
	$password = "CT2frtuzLJ087lRr8z9P";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>
