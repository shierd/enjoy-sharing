$(document).ready(function(){
	$('#tagCanvas').attr("width",$(window).width()).attr("height",$(window).height());
	var url=window.location.href;
	var urlMatch=url.match(/[\w|-]+\.php/);
	var navId="index";
	if(urlMatch!=null){
		var urlFile=urlMatch[0];
		var navId=urlFile.substring(0,urlFile.indexOf("."));
	}
	$("#header ul.masthead-nav").children().removeClass("active");
	$("#"+navId).addClass("active");
	
	if(!$('#tagCanvas').tagcanvas({ 
	    textColour : '#ffffff', 
   		maxSpeed : 0.05, 
   		depth : 1.24 })) {
      		// TagCanvas failed to load 
        	$('#tagCanvas').hide(); 
    }
	
	$('#file-list .list-group span.list-group-item').click(function(){
		$(this).parent().children().removeClass("active");
		$(this).addClass("active");
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
	
	$('#file-list .text-down').click(function(){
		$.ajax({
			url:"main.php",
			type:"GET",
			data:{"action":"download","byuser":$(this).parent().parent().children('h4').attr("by"),"filename":$(this).parent().parent().children('h4').html()},
			success:function(data){
				var data=$.parseJSON(data);
				if(data.errCode==0){
					var downIf=document.createElement("iframe");
					downIf.src=data.downurl;
					downIf.style.display="none";
					document.body.appendChild(downIf);
				}
			}
		});
	})
	
});
