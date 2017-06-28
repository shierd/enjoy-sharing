<?php
	/*
	*	会员登录页
	*/
	require 'layouts/user_header.php';
?>

<div id="content">
	<div id="signin">
	<form>
		<h2>Please sign in</h2>
		<div class="form-group">
			<label class="sr-only" for="email">邮箱：</label>
			<input class="form-control" id="email" type="text" name="useremail" placeholder="Email" />
		</div>
		<div class="form-group">
			<label class="sr-only" for="password">密码：</label>
			<input class="form-control" id="password" type="password" name="userpass" placeholder="Password" />
		</div>
		<button class="btn btn-primary btn-block" id="btn_login" type="button" >登录</button>
	</form>
	<a href="register.php" >注册</a>
	<div>
</div>

<script type="text/javascript" src="js/user_login.js"></script>

<?php
	require 'layouts/user_footer.php';
?>
