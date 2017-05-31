<?php
	require 'layouts/user_header.php';
?>

<div id="content">
<form>
	邮箱：<input type="text" name="email" /><br />
	用户名：<input type="text" name="uname" /><br />
	密码：<input type="text" name="upass" /><br />
	<input id="btn_register" type="button" value="注册" />
</form>
</div>

<script type="text/javascript" src="js/user_register.js" ></script>

<?php
	require 'layouts/user_footer.php';
?>