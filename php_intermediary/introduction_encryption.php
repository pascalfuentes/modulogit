<?php

$name = 'andre';
$name2 = md5($name); //md5 is a irreversive way to encrypt the text
$name3 = base64_encode($name); //base64_encode is a reversive way to encrypt the text
//You can decode in the base64encode site.


echo "Nome original: ".$name."<br/>";
echo "Nome encrypt: ".$name2."<br/>";
echo "Nome encrypt reversive: ".$name3."<br/>";
echo "Meu texto original é: ".base64_decode($name3);




?>