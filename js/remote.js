$(document).keydown(function(e){
    if (e.keyCode == 37)  
    	 button_direction('l');
    if (e.keyCode == 38) 
        button_direction('f');
    if (e.keyCode == 39) 
    	  button_direction('r');
    if (e.keyCode == 40)
    	 button_direction('b');
    if (e.keyCode == 32)
    	 button_direction('s');
    if (e.keyCode == 33)
         button_direction('n');
});

//---------DIRECTION---------------------------------
function button_direction(val)
{
	console.log("button val:" + val);
	$.post("ajax_direction.php",
    {
      direction: val
    }
    );
}

//---------SPEED--------------------------------------
function speed_slider(val)
{
	console.log("slider val:" + val);
	$.post("ajax_speed.php",
    {
      speed:val
    }
    );
}

//---------SPEED--------------------------------------
function speed_slider1(val)
{
	console.log("slider1 val:" + val);
	$.post("ajax_speed1.php",
    {
      speed1:val
    }
    );
}
//---------SPEED--------------------------------------
function speed_slider2(val)
{
        console.log("slider2 val:" + val);
        $.post("ajax_speed2.php",
    {
      speed2:val
    }
    );
}

