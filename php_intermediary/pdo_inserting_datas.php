<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{ 
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$name = "elaine3";
	$email = "teste3@hotmail.com";
	$password = md5("123");

	$sql = "INSERT INTO users2 SET name = '$name', email = '$email', password = '$password'";
	$sql = $pdo->query($sql);

	echo "users insert with sucessfull ".$pdo->lastInsertId();

} catch(PDOException $e) { 
	echo "Falhou: ".$e->getMessage();
}
//-------------------------








?>