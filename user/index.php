<?php
	/*
	*	会员登录页
	*/
	require 'layouts/user_header.php';
?>

<div id="content">
	<form method="POST" action="login.php" >
		用户名：<input type="text" name="username" />
		密码：<input type="text" name="userpass" />
		<input type="submit" value="登录" />
	</form>
</div>

<?php
	require 'layouts/user_footer.php';
?>