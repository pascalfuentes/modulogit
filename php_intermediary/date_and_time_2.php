<?php

$timeNow = time();
echo $timeNow."<br/><br/><br/><br/>";

$timeThen = date("d/m/Y", strtotime("+10 days", 1570000000));
echo $timeThen;

?>