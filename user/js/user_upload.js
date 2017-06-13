$(document).ready(function(){
	$('#btn_upload').click(function(){
		var data=new FormData($('#form_upload')[0]);
		data.append("action","upload");
		$.ajax({
			url:"user.php",
			type:'POST',
			cache:false,
			data:data,
			processData:false,
			contentType:false
		}).done(function(data){
			var data=$.parseJSON(data);
			alert(data.msg);
			window.location.href='userfile.php';
		}).fail(function(data){
			
		});
	});
})