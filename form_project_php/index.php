<html>
	<form method="POST">
		E-mail:
		<input type="text" id="email" name="email" required><br/>
		<br/>

		Password:
		<input type="password" id="password" required name="password"><br/>
		<br/>

		<input type="submit" id="submit" name="submit" value="SEND"><br/>
		<br/>	
				
		<div class="message">
			<?php
				include_once "taker.php";
			?>
		</div>

	</form>
</html>

