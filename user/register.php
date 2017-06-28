<?php
	require 'layouts/user_header.php';
?>

<div id="content">
<div id="signup">
<form class="form-horizontal">
	<h2>Welcome to join us</h2>
	<div class="form-group">
		<label for="email" class="col-md-3 control-label">邮箱：</label>
		<div class="col-md-9">
			<input class="form-control" id="email" type="text" name="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="username" class="col-md-3 control-label">用户名：</label>
		<div class="col-md-9">
			<input class="form-control" id="username" type="text" name="uname" />
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-3 control-label">密码：</label>
		<div class="col-md-9">
			<input class="form-control" id="password" type="password" name="upass" />
		</div>
	</div>
	<div id="back">
		<a href="index.php">&laquo;Back to sign in</a>
	</div>
	<button id="btn_register" type="button" class="btn btn-success" >注册</button>
</form>
</div>
</div>

<script type="text/javascript" src="js/user_register.js" ></script>

<?php
	require 'layouts/user_footer.php';
?>
