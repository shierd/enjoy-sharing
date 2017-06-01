<?php
	/*
	*	会员登录页
	*/
	require 'layouts/user_header.php';
?>

<div id="content">
	<form>
		邮箱：<input type="text" name="useremail" />
		密码：<input type="text" name="userpass" />
		<button id="btn_login" type="button" >登录</button>
	</form>
	<a href="register.php" >注册</a>
</div>

<script type="text/javascript" src="js/user_login.js"></script>

<?php
	require 'layouts/user_footer.php';
?>