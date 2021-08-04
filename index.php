<html>
<head>        
   <title>Control Panel</title>
   <link href="css/cp.css" rel="stylesheet" type="text/css">  
   <script src="js/jquery.min.js"></script>        
   <script src="js/cp.js"></script>        
   <script>
	
	
   </script>
</head> 
<body>
<?php

printf("<div align='center' id='box_outer'>");//------------------------
	echo"<div align='center' id='box_title'>";
		echo"<h1 style='color:#0000b3'>Robot Pencengkram</h1>";
		
		echo"<div class='box_controls'>";
			echo"<zz>";
				echo"<label class='floatLabel'>Camera</label><br>";
				echo"<input id='cam_on' type='submit' onclick=camera('on'); value='ON'/>";
				echo"<input id='cam_off' type='submit' onclick=camera('off'); value='OFF'/>";
				echo"<br>";
				echo"<txt> .</txt>";
			echo"</zz>";
		echo"</div>";
		
		echo"<div class='box_controls'>";
			echo"<zz>";
				echo"<label class='floatLabel'>Lights</label><br>";
				echo"<input id='camlight' style='background-color:lightgray' type='submit' onclick=toggle_light('camlight'); value='OFF'/>";
				echo"<input id='headlight' style='background-color:lightgray' type='submit' onclick=toggle_light('headlight'); value='OFF'/>";
				echo"<br>";
				echo"<txt>Camera</txt>";
				echo"<txt>Front</txt>";
			echo"</zz>";
		echo"</div>";
		
		echo"<div class='box_controls'>";
			echo"<zz>";
				echo"<label class='floatLabel'>Range Sensor</label><br>";
				echo"<b id='range' style='float:right;color:blue;font-size:30px'></b>";
				echo"<input id='range_button' type='submit' onclick=toggle_rangeSensor('range_button'); value='OFF'/>";
				echo"<script src='range_sensor/web/rangesensor.js'></script>";
			echo"</zz>";
		echo"</div>";
		
		echo"<div class='box_controls'>";
			echo"<zz>";
				echo"<label class='floatLabel'>Preasure Sensor</label><br>";
				echo"<b id='preasure' style='float:right;color:blue;font-size:30px'></b>";
				echo"<input id='preasure_button' type='submit' onclick=toggle_preasureSensor('preasure_button'); value='OFF'/>";
				echo"<script src='tekanan_sensor/web/preasure.js'></script>";
			echo"</zz>";
		echo"</div>";

		echo"<div class='box_controls'>";
			echo"<zz>";
				echo"<label class='floatLabel'>Temperature Sensor</label><br>";
				echo"<b id='temperature' style='float:right;color:blue;font-size:30px'></b>";
				echo"<input id='temperature_button' type='submit' onclick=toggle_temperatureSensor('temperature_button'); value='OFF'/>";
				echo"<script src='temperature_sensor/web/temperaturesensor.js'></script>";
			echo"</zz>";
		echo"</div>";

		echo"<div class='box_controls'>";
			echo"<zz>";
				echo"<label class='floatLabel'>Humidity Sensor</label><br>";
				echo"<b id='humidity' style='float:right;color:blue;font-size:30px'></b>";
				echo"<input id='humidity_button' type='submit' onclick=toggle_humiditySensor('humidity_button'); value='OFF'/>";
				echo"<script src='humidity_sensor/web/humiditysensor.js'></script>";
			echo"</zz>";
		echo"</div>";
	echo"</div>";
	
	//****************************************************************************
	$host=$_SERVER['192.168.43.46'];//192.168.137.65
	$path=rtrim(dirname($_SERVER["PHP_SELF"]), "/\\"); //robot

	$link_remote= 
        'http://192.168.43.46/robot/remote.php';//http://192.168.137.65 
        $link_vid= 
        'http://192.168.43.46:8000';//http://192.168.137.65:8000
	echo"
		<iframe src='$link_vid' id='box_video'></iframe>
		<iframe src= '$link_remote' id='box_remote'></iframe>
	";
	//****************************************************************************
	
echo"</div>";//------------------------------------------------------

?>

</body>
</html>
