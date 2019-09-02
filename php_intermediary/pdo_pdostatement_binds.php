<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{ 
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$name = 'pedro';
	$id = '3';

	$sql = "UPDATE users2 SET name = :novonome WHERE id = :id";

	$sql1 = $pdo->prepare($sql);
	$sql1->bindValue(':novonome', $name);
	$sql1->bindValue(':id', $id);
	$sql1->execute();

	//PDOStatement will apply a lot of techniques to secure the database.

	//binds statement 



	echo "user updated with sucess!";
	

} catch(PDOException $e) { 
	echo "Falhou: ".$e->getMessage();
}
//-------------------------


?>