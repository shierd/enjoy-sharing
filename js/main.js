$(document).ready(function(){
	$('#tagCanvas').attr("width",$(window).width()).attr("height",$(window).height());
	if(!$('#tagCanvas').tagcanvas({ 
	    textColour : '#ffffff', 
   		maxSpeed : 0.05, 
   		depth : 1.24 })) {
      		// TagCanvas failed to load 
        	$('#tagCanvas').hide(); 
    	}
})
