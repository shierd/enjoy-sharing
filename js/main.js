$(document).ready(function(){
	$('#tagCanvas').attr("width",$(window).width()).attr("height",$(window).height());
	if(!$('#tagCanvas').tagcanvas({ 
	    textColour : '#ffffff', 
   		maxSpeed : 0.05, 
   		depth : 1.24 })) {
      		// TagCanvas failed to load 
        	$('#tagCanvas').hide(); 
    	}
	
	$('#file-list .list-group span').click(function(){
		$.ajax({
			url:"/main.php",
			type:"GET",
			data:{"action":"getFileDetail","fileId":$(this).children('h4').attr("name")},
			success:function(data){
				var data=$.parseJSON(data);
				$('#file-detail .panel-heading').html(data.name);
				if(data.intro==null){
					$('#file-detail .panel-body').html("The sharer is too lazy...");
				}else
					$('#file-detail .panel-body').html(data.intro);
			}
		});
	});
});
