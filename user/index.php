<?php
	/*
	*	会员登录页
	*/
	require 'layouts/user_header.php';
?>

<div id="content">
	<!--用submit好还是用ajax好呢-->
	<form method="POST" action="login.php" >
		邮箱：<input type="text" name="useremail" />
		密码：<input type="text" name="userpass" />
		<input type="submit" value="登录" />
	</form>
	<a href="register.php" >注册</a>
</div>
<?php
	require 'layouts/user_footer.php';
?>