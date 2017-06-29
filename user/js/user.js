$(document).ready(function(){
	$('.sidebar li').click(function(){
		$(this).parent().children().removeClass("active");
		$(this).attr("class","active");
		$('#main .tab-title').html($(this).children().html());
		$('#main .tab-item').removeClass("active");
		$("#"+$(this).children().attr("for")).addClass("active");
	});
	
	$('#user-dropdown').mouseover(function(){
		$(this).children('ul').css("display","block");
	});
	
	$('#user-dropdown').mouseout(function(){
		$(this).children('ul').css("display","none");
	});
	
	$('#logout').click(function(){
		$.ajax({
			url:"user.php",
			type:"POST",
			data:{"action":"logout"},
			success:function(data){
				var data=$.parseJSON(data);
				if(data.errCode==0){
					window.location.href="index.php";
				}
			}
		});
	})
});
