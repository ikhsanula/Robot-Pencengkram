<?php
include_once 'system.php';

$dir=$_POST["direction"];

move($dir);

echo"Dir: \" $dir \"  <br>";

?>
