<pre>
<?php
if(isset($_FILES['arquivo'])) {
	// Envio de um único arquivo
	// $nome = $_FILES['arquivo']['name']; //arquivo.jpg

	// Envio de múltiplos arquivos
	// $nome = $_FILES['arquivo']['name']; //ARRAY

	if(count($_FILES['arquivo']['tmp_name']) > 0) {

		for($q=0;$q<count($_FILES['arquivo']['tmp_name']);$q++) {

			$nomedoarquivo = md5($_FILES['arquivo']['name'][$q].time().rand(0,999)).'.jpg';

			move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'arquivos/'.$nomedoarquivo);
		}
	}

}

?>
</pre>


<form method="POST" enctype="multipart/form-data">

	Arquivo:<br/>
	<input type="file" name="arquivo[]" multiple /><br/><br/>

	<input type="submit" value="Enviar Arquivos" />
	
</form>
