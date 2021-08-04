var interval;
function toggle_temperatureSensor(id)
	{
		
		//alert(id);
		console.log("toggle_temperatureSensor button clicked");
		button_caption=document.getElementById(id).value;
		//alert(button_caption);
		if(button_caption=="OFF"){
			temperatureSensor(1);
			
			document.getElementById(id).value="ON";
			document.getElementById(id).style.backgroundColor="blue";
			//alert("hi");
			interval=window.setInterval(get_temperature, 500); //timer for initiating ajax request 

			
			
		}
		if(button_caption=="ON"){
			temperatureSensor(0);
			document.getElementById(id).value="OFF";
			document.getElementById(id).style.backgroundColor="lightgray";
			
			clearInterval(interval);
			document.getElementById("temperature").innerHTML="";
			
			
		}
			
	}
function temperatureSensor(state)
{	console.log("state: ", state);
	
	$.post("/robot/temperature_sensor/web/ajax_temperatureSensor.php",
	{
		state: state
	}
	);

}
function get_temperature()
	{
		$.post("/robot/temperature_sensor/web/ajax_getTemperature.php",
		{
		//direction: dir
		//speed:sp
		},
		function(data){
			//document.getElementById("range").innerHTML = data;
			
			if (data<=30)
				document.getElementById("temperature").style.color="red";
			else if(data > 30 && data <= 60) 
				document.getElementById("temperature").style.color="orange";
			else
				document.getElementById("temperature").style.color="blue";
			
			if (data>400)
				document.getElementById("temperature").innerHTML = "-";
			else
				document.getElementById("temperature").innerHTML = data;
				
		});
	}
