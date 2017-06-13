$(document).ready(function(){
	$('a[name="delete"]').click(function(){
		var filename=$(this).parent().parent().find('#filename').html();
		$.post('user.php',{"action":"deleteFile","filename":filename},function(data,status){
			if(status=='success'){
				var data=$.parseJSON(data);
				alert(data.msg);
				window.location.reload();
			}
		});
	});
})