<?php

$x = array(
	'nome' => 'andre',
	'idade' => 90,
	'cidade' => 'campo bom',
	'estado' => 'rs',
	'pais' => 'brasil',
);

$x2 = array_keys($x);

print_r($x2);

echo "<br/><br/><br/><br/><hr>";
//-------------------------------------------

$x3 = array_values($x);

print_r($x3);


echo "<br/><br/><br/><br/><hr>";
//-------------------------------------------

$x4 = array_pop($x);

print_r($x4);
echo "<br/><br/>";
print_r($x);
echo "<br/><br/>";

$x5 = array_shift($x);

echo "<br/><br/>";
print_r($x5);

echo "<br/><br/><br/><br/><hr>";
//-------------------------------------------

$x6 = asort($x);

print_r($x);

echo "<br/><br/>";

$x7 = arsort($x);

print_r($x);

echo "<br/><br/><br/><br/><hr>";
//-------------------------------------------

$x7 = count($x);

print_r($x7);

echo "<br/><br/><br/><br/><hr>";
//-------------------------------------------

if(in_array('andre', $x)) {
	echo "Vencedor foi andre";
} else {
	echo "Perdedor foi andre";
}

?>