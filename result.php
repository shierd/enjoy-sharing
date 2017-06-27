<?php
	require_once 'inc/Handler.class.php';
	require 'common/header.php';
	
	//过滤
	if(isset($_GET['keyword'])){
		$text=$_GET['keyword'];
		$res=Handler::search($text);
	}
?>

<div class="container">
<table border="1">
	<tr>
		<th>文件名</th>
		<th>类型</th>
		<th>标签</th>
	</tr>
<?php if($res!=null){ ?>
	<?php foreach($res as $row){ ?>
		<tr>
			<td><?php echo $row['f_name']; ?></td>
			<td><?php echo $row['f_type'] ?></td>
			<td><?php echo $row['f_tag'] ?></td>
		</tr>
	<?php } ?>
<?php } ?>
</table>
</div>

<?php
	require 'common/footer.php';
?>