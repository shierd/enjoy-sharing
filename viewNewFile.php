<?php
	require_once 'inc/Handler.class.php';
	require 'common/header.php';
	
	$res=Handler::queryNewFile();
?>

<div class="container">
<table border="1">
	<tr>
		<th>文件名</th>
		<th>类型</th>
	</tr>
<?php if($res!=null){ ?>
	<?php foreach($res as $row){ ?>
		<tr>
			<td><?php echo $row['f_name']; ?></td>
			<td><?php echo $row['f_type'] ?></td>
		</tr>
	<?php } ?>
<?php } ?>
</table>
</div>

<?php
	require 'common/footer.php';
?>