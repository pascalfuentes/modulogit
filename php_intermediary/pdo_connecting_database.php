<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";
//-----------------------------

try{ //if somethin goes wrong, will not show to the user.
	$pdo = new PDO($dsn, $dbuser, $dbpass); //it starts the PDO library

	echo "Sucessfull!";




} catch(PDOException $e) { //it will show the message to the user
	echo "Falhou: ".$e->getMessage();


}



?>