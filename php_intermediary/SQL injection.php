<?php

$autor = addslashes($_POST["autor"]); //here, we add a slash everytime we have a special character

$sql = "SELECT * FROM posts WHERE autor = '$autor'";

?>