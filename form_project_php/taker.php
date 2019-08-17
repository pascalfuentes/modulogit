<?php
	if (isset($_POST['email']) && !empty($_POST['email'])) {


		echo "E-mail send with sucess!";

		header("Location: index.php");

	} else {
	}
?>