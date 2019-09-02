<?php
session_Start(); //para saber se tem algum usuário logado

if(isset($_SESSION['id']) && empty($_SESSION['id']) ==false){
	echo "Área restrita...";
} else {
	header("Location: login.php");
}



?>
