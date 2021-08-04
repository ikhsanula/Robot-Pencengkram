<html>
<head>        
   <title>Remote</title>  
   <link href="css/remote.css" rel="stylesheet" type="text/css">  
   <script src="js/jquery.min.js"></script>  
   <script src="js/remote.js"></script>  
             
</head> 

<body>
<?php
include_once 'vars.php';

gpio_initialise(); // initialising the GPIO pins

?>
<div align="center" id='box_outer'>
	<!-- =================Direction Buttons=================================================== -->
	<div class='box_row'>
		<input  class="button"  type="submit" onclick="button_direction('f');" value="Maju"/>
	</div>
	<br />
	<div class='box_row'>
		<input class="button" type="submit" onclick="button_direction('s');" value="STOP"/>
	</div>
	<br />
	<div class='box_row'>
			<input  class="button" type="submit" onclick="button_direction('b');" value="Mundur"/>
	</div>
	<!-- ================================================================================= -->
	
	<br><br>
	
	<!-- =================Direction Buttons=================================================== -->
	<div class='box_row'>
		<input class="button" style="float:left" type="submit" onclick="button_direction('l');" value="Keluar"/>
		<input class="button" type="submit" onclick="button_direction('n');" value="Berhenti"/>
		<input  class="button" style="float:right" type="submit" onclick="button_direction('r');" value="Masuk"/>
	</div>
	<br />
	<!-- ================================================================================= -->
	
	<br><br>
	
	<!-- =============Range Slider for speed==============================================-->
	<div class='box_row'>
	
		<div class="slidecontainer">
			<input type="range" min="7.5" max="11.5" value="9.5" class="slider" id="myRange" step="0.1">
			<p>Berbelok: <span id="speed">10</span></p>
		</div>
		<script>
			var slider = document.getElementById("myRange");
			var output = document.getElementById("speed");
			output.innerHTML = slider.value;
			speed_slider(slider.value);
			slider.oninput = function() {
				output.innerHTML = this.value;
				speed_slider(this.value);
				}
		</script>
	</div>
	<!-- ================================================================================== -->
<!-- =============Range Slider for speed==============================================-->
	<div class='box_row'>
	
		<div class="slidecontainer">
			<input type="range" min="8" max="10.5" value="9.5" class="slider" id="myRange1" step="0.5">
			<p>Posisi Gripper: <span id="speed1">9.5</span></p>
		</div>
		<script>
			var slider1 = document.getElementById("myRange1");
			var output1 = document.getElementById("speed1");
			output1.innerHTML = slider1.value;
			speed_slider1(slider1.value);
			slider1.oninput = function() {
				output1.innerHTML = this.value;
				speed_slider1(this.value);
				}
		</script>
	</div>
	<!-- ================================================================================== -->
<!-- =============Range Slider for speed==============================================-->
	<div class='box_row'>
	
		<div class="slidecontainer">
			<input type="range" min="2.5" max="6" value="2.5" class="slider" id="myRange2" step="0.1">
			<p>Gripper: <span id="speed2">2.5</span></p>
		</div>
		<script>
			var slider2 = document.getElementById("myRange2");
			var output2 = document.getElementById("speed2");
			output2.innerHTML = slider2.value;
			speed_slider2(slider2.value);
			slider2.oninput = function() {
				output2.innerHTML = this.value;
				speed_slider2(this.value);
				}
		</script>
	</div>
	<!-- ================================================================================== -->

</div>

</body>
</html>
