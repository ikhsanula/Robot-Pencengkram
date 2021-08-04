var interval;
function toggle_humiditySensor(id)
	{
		
		//alert(id);
		console.log("toggle_humiditySensor button clicked");
		button_caption=document.getElementById(id).value;
		//alert(button_caption);
		if(button_caption=="OFF"){
			humiditySensor(1);
			
			document.getElementById(id).value="ON";
			document.getElementById(id).style.backgroundColor="blue";
			//alert("hi");
			interval=window.setInterval(get_humidity, 500); //timer for initiating ajax request 

			
			
		}
		if(button_caption=="ON"){
			humiditySensor(0);
			document.getElementById(id).value="OFF";
			document.getElementById(id).style.backgroundColor="lightgray";
			
			clearInterval(interval);
			document.getElementById("humidity").innerHTML="";
			
			
		}
			
	}
function humiditySensor(state)
{	console.log("state: ", state);
	
	$.post("/robot/temperature_sensor/web/ajax_temperatureSensor.php",
	{
		state: state
	}
	);

}
function get_humidity()
	{
		$.post("/robot/humidity_sensor/web/ajax_getHumidity.php",
		{
		//direction: dir
		//speed:sp
		},
		function(data){
			//document.getElementById("humidity").innerHTML = data;
			
			if (data<=30)
				document.getElementById("humidity").style.color="red";
			else if(data > 30 && data <= 60) 
				document.getElementById("humidity").style.color="orange";
			else
				document.getElementById("humidity").style.color="blue";
			
			if (data>400)
				document.getElementById("humidity").innerHTML = "-";
			else
				document.getElementById("humidity").innerHTML = data;
				
		});
	}
