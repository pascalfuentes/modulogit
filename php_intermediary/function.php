<?php

function sumNumber($x, $y) {

	$conta = $x + $y;

	return $conta;

}

function showMyName() {
	return 'andre';
}

$resultado = sumNumber(10, 20);

echo "Resultado �: ".$resultado."<br/>";
echo "Meu nome � ".showMyName();


?>