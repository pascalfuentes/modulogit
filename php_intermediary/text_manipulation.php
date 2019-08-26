<?php

$name = 'andre pascal';

$x = explode(" ", $name);

print_r($x);

echo "<br/><br/><br/><br/><hr>";
//-------------------------------------------

$array = array('andre', 'pascal', 'fuentes', 'neto');

$y = implode(" ", $array);

print_r($y);

echo "<br/><br/><br/><br/><hr>";
//-------------------------------------------

$z = number_format(34184.85342342, 2, ",", ".");

echo $z;

echo "<br/><br/><br/><br/><hr>";
//-------------------------------------------

$a = "O rato roeu a roupa!";

$string = str_replace("rato", "porco", $a);

echo $string;

echo "<br/><br/><br/><br/><hr>";
//-------------------------------------------

echo strtolower('Andre Pascal')."<br/><br/>";

echo strtoupper('Andre Pascal');

echo "<br/><br/><br/><br/><hr>";
//-------------------------------------------

$texto = 'pascal';

$b = substr($texto, 2, 3);

echo $b;

?>