<?php
	session_start();
	if(!$_SESSION['user']){
		header('location:index.php');
		exit(0);
	}
	require_once('../inc/config.php');
	require_once(USER.'inc/User.class.php');
	require 'layouts/user_header.php';
	
	$user=new User($_SESSION['user'],$_SESSION['pass']);
	$files=$user->getUfiles();
?>

<table border="1" >
<tr>
	<th>文件名</th>
	<th>类型</th>
	<th>标签</th>
	<th>操作</th>
</tr>
<?php for($i=0;$i<count($files['name']);$i++){?>
<tr>
	<td id="filename"><?php echo $files['name'][$i] ?></td>
	<td><?php echo $files['type'][$i] ?></td>
	<td><?php echo $files['tag'][$i] ?></td>
	<td><a href="#" name="delete" >删除</a></td>
</tr>
<?php } ?>
</table>

<script src="js/user_file.js" type="text/javascript" ></script>

<?php
	require 'layouts/user_footer.php';
?>