$(document).ready(function(){
	$('#btn_register').click(function(){
		var email=$('input[name="email"]').val();
		var uname=$('input[name="uname"]').val();
		var upass=$('input[name="upass"]').val();
		$.post("user.php",{"action":"register","email":email,"uname":uname,"upass":upass},function(data,status){
			if(status=='success'){
				var data=$.parseJSON(data);
				if(data.errCode==0){
					alert(data.msg);
					window.location.href="index.php";
				}else{
					alert(data.msg);
				}
			}
		});
	})
})