$(document).ready(function(){
	$('#btn_login').click(function(){
		var email=$('input[name="useremail"]').val();
		var pass=$('input[name="userpass"]').val();
		$.post("user.php",{"action":"login","email":email,"upass":pass},function(data,status){
			if(status=="success"){
				var data=$.parseJSON(data);
				if(data.errCode==0){
					window.location.href="dashboard.php";
				}else{
					alert(data.msg);
					window.location.reload();
				}
			}
		})
	});
})