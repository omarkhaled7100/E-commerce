<!--
in this file we write code for connection with database.
-->
<?php

function OpenConnection()
{
	/*$databaseHost = "localhost";
	$databaseUser = "root";
	$databasePassword = "";
	$database = "eCommerce";*/
	
	$conn = new mysqli("localhost","root","","eCommerce") or die ("Database connection faild... %s\n");

	return $conn;
}



function closeConnection($conn){
	$conn -> close();
}


?>