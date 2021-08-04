<?php
include_once 'vars.php';

$speed2=$_POST["speed2"];

$pwm_val=intval($speed2);

//echo"pwm val: \" $pwm_val \"  <br>";
set_speed2($pwm_val);

?>
