<?php
require 'config.php';


if(isset($_POST['name']) && empty($_POST['name']) == false) {
	$name = addslashes($_POST['name']);
	$email = addslashes($_POST['email']);
	$password = md5(addslashes($_POST['password']));

	$sql = "INSERT INTO users2 SET name = '$name', email = '$email', password = '$password'";
	$pdo->query($sql);

	header("Location: index.php");
}


?>


<form method="POST">
	Name:<br/>
	<input type="text" name="name"><br/><br/>
	Email:<br/>
	<input type="text" name="email"><br/><br/>
	Password:<br/>
	<input type="password" name="password"><br/><br/>

	<input type="submit" value="register">

	
</form>