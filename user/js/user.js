$(document).ready(function(){
	$('.sidebar li').click(function(){
		$(this).parent().children().removeClass("active");
		$(this).attr("class","active");
		$('#main .tab-title').html($(this).children().html());
		$('#main .tab-item').removeClass("active");
		$("#"+$(this).children().attr("for")).addClass("active");
	});
});
