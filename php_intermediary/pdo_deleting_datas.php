<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{ 
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$sql = "DELETE FROM users2 WHERE id = '4'";
	$pdo->query($sql);

	echo "Usuário deletado com sucesso";

} catch(PDOException $e) { 
	echo "Falhou: ".$e->getMessage();
}
//-------------------------



?>