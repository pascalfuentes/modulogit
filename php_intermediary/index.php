<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try{ 
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$name = "elaine3";
	$email = "teste3@hotmail.com";
	$password = "128";

	$sql = "INSERT INTO users SET id = '6', nome = '$name', email = '$email', password = '$password'";
	$sql = $pdo->query($sql);

	echo "users insert with sucessfull ".$pdo->lastInsertId();

} catch(PDOException $e) { 
	echo "Falhou: ".$e->getMessage();
}
//-------------------------








?>