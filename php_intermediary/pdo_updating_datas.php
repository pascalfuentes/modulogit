<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{ 
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$sql = "UPDATE users2 SET email = 'abc@hotmail.com' WHERE email = 'raquel@raquel.com.br'";
	$sql = $pdo->query($sql);

	echo "Usuário alterado com sucesso!";

} catch(PDOException $e) { 
	echo "Falhou: ".$e->getMessage();
}
//-------------------------








?>