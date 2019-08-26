<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try{ 
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$sql = "SELECT * FROM users WHERE email = 'andre2@gmail.com'";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0) {

		foreach($sql->fetchAll() as $users) {
			echo "name: ".$users['name']." - ".$users['email']."<br/>";
		}

	} else {

		echo "Don't have users in the database";
	}


} catch(PDOException $e) { 
	echo "Falhou: ".$e->getMessage();
}
//-------------------------








?>