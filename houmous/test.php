<!doctype html>
<title>Premier script php</title>

<p> Petite confession sur ma vie <3 :
<?php
$str = file_get_contents("houmous.txt");
$t = explode("#",$str);
echo($t[mt_rand(1,6)]);
?>.
