<?php
//include_once 'vars.php';

$state=$_POST["state"];
//echo"range sensor status: $state <br>";

$xx=exec("sudo python /var/www/html/robot/tekanan_sensor/master.py $state");

#os.system("sudo python /var/www/html/robot/speaker/speaker_lights.py &");

?>
