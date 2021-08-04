var interval;
function toggle_preasureSensor(id)
	{
		
		//alert(id);
		console.log("toggle_preasureSensor button clicked");
		button_caption=document.getElementById(id).value;
		//alert(button_caption);
		if(button_caption=="OFF"){
			preasureSensor(1);
			
			document.getElementById(id).value="ON";
			document.getElementById(id).style.backgroundColor="blue";
			//alert("hi");
			interval=window.setInterval(get_preasure, 500); //timer for initiating ajax request 

			
			
		}
		if(button_caption=="ON"){
			presasureSensor(0);
			document.getElementById(id).value="OFF";
			document.getElementById(id).style.backgroundColor="lightgray";
			
			clearInterval(interval);
			document.getElementById("preasure").innerHTML="";
			
			
		}
			
	}
function preasureSensor(state)
{	console.log("state: ", state);
	
	$.post("/robot/tekanan_sensor/web/ajax_preasureSensor.php",
	{
		state: state
	}
	);

}
function get_preasure()
	{
		$.post("/robot/tekanan_sensor/web/ajax_getPreasure.php",
		{
		//direction: dir
		//speed:sp
		},
		function(data){
			//document.getElementById("preasure").innerHTML = data;
			
			if (data<=30)
				document.getElementById("preasure").style.color="red";
			else if(data > 30 && data <= 60) 
				document.getElementById("preasure").style.color="orange";
			else
				document.getElementById("preasure").style.color="blue";
			
			if (data>400)
				document.getElementById("preasure").innerHTML = "-";
			else
				document.getElementById("preasure").innerHTML = data;
				
		});
	}
