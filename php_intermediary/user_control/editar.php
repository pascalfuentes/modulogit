<?php
require 'config.php';
$id = 0;

if(isset($_GET['id']) && empty($_GET['id']) == false) {

	$id = addslashes($_GET['id']);
}

if(isset($_POST['name']) && empty($_POST['name']) == false) {

	$name = addslashes($_POST['name']);
	$email = addslashes($_POST['email']);

	$sql = "UPDATE users2 SET name = '$name', email = '$email' WHERE id = '$id'";
	$pdo->query($sql);

	header("Location: index.php");
}

$sql = "SELECT * FROM users2 WHERE id = '$id'";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0) {
	$dado = $sql->fetch();
} else {
	header("Location: index.php");
}



?>

<form method="POST">
	Name:<br/>
	<input type="text" name="name" value="<?php echo $dado['name'];?>"><br/><br/>
	Email:<br/>
	<input type="text" name="email" value="<?php echo $dado['email']; ?>"><br/><br/>

	<input type="submit" value="update">

	
</form>