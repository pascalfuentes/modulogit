<?php
session_Start(); //para saber se tem algum usu�rio logado

if(isset($_SESSION['id']) && empty($_SESSION['id']) ==false){
	echo "�rea restrita...";
} else {
	header("Location: login.php");
}



?>
