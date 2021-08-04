<?php
include_once 'vars.php';

$speed1=$_POST["speed1"];

$pwm_val=intval($speed1);

//echo"pwm val: \" $pwm_val \"  <br>";
set_speed1($pwm_val);

?>
