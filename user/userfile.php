<?php
	session_start();
	if(!$_SESSION['user']){
		header('location:index.php');
		exit(0);
	}
	require 'layouts/user_header.php';
?>

<table border="1" >
<tr>
	<th>文件名</th>
	<th>操作</th>
</tr>
<tr>
	<td></td>
	<td></td>
</tr>
</table>

<?php
	require 'layouts/user_footer.php';
?>