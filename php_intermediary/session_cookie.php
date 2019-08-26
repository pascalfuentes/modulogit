<?php

//session is with the browser open. You can close the tab, open a new tab, but you still are in the sesion. When you close the browser, the session is closed.

session_start();

$_SESSION["teste"] = "andre pascal";

echo "sessão foi feita...";

header('index.php');

echo "meu nome é: ".$_SESSION["teste"];

echo "<br/><br/><br/><br/>";
//------------------------------------------

//cookie 

setcookie("meuteste", "fulano de tal", time()+3600);

echo "Cookie setado com sucesso";

echo "Meu cookie é de: ".$_COOKIE["meuteste"];



?>