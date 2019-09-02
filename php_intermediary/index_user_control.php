<?php

require 'config.php';

?>


<a href="add.php">Add new user</a>
<table border="0" width="100%">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Actions</th>
	</tr>
	<?php
	$sql = "SELECT * FROM users2";
	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0) {
		foreach($sql->fetchAll() as $user) {
			echo '<tr>';
			echo '<td>'.$user['name'].'</td>';
			echo '<td>'.$user['email'].'</td>';
			echo '<td><a href="editar.php?id='.$user['id'].'">Editar</a> - <a href="excluir.php?id='.$user['id'].'">Excluir</a></td>';
			echo '</tr>';
		}
	}
	?>
	


</table>
