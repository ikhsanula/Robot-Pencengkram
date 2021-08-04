<?php
//include_once 'vars.php';

$state=$_POST["state"];
//echo"temperature sensor status: $state <br>";

exec("sudo python3 /var/www/html/robot/temperature_sensor/temperature.py");

#os.system("sudo python /var/www/html/earthrover/speaker/speaker_lights.py &");
?>
