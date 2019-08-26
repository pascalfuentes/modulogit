<?php

$names = array(
	array('nome'=>'andre', 'idade'=>90),
	array('nome'=>'raquel', 'idade'=>91),
	array('nome'=>'pierre', 'idade'=>92),
	array('nome'=>'paulo', 'idade'=>93)
);


foreach($names as $aluno) {
	echo "aluno: ".$aluno['nome']."<br/>";
	echo "idade: ".$aluno['idade']."<br/><br/>";
}

?>


<?php

$aluno = array(
	'nome'=> 'andre',
	'idade'=>90,
	'pais'=>'brasil',
	'estado'=>'rs'
	);

foreach ($aluno as $key => $dado) {
	echo $key.' é '.$dado.'<br/>';
}

?>