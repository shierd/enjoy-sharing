<?php
	require_once 'inc/Handler.class.php';
	require 'common/header.php';
	
	//过滤
	if(isset($_GET['keyword'])){
		$text=$_GET['keyword'];
		$res=Handler::search($text);
	}
?>

<div id="content">
<!--
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
-->
<div id="search-result" class="panel panel-default">
<div class="panel-heading">Find Something Interesting...</div>
<div class="panel-body">
<div id="file-list" class="list-group">
	<a href="#" class="list-group-item active">
		<h4 class="list-grouop-item-header">123</h4>
		<p class="list-group-item-text">asfasfasfsafasfasf</p>
	</a>
    <a href="#" class="list-group-item">
        <h4 class="list-grouop-item-header">123</h4>
        <p class="list-group-item-text">asfasfasfsafasfasf</p>
    </a>
    <a href="#" class="list-group-item">
        <h4 class="list-grouop-item-header">123</h4>
        <p class="list-group-item-text">asfasfasfsafasfasf</p>
    </a>
    <a href="#" class="list-group-item">
        <h4 class="list-grouop-item-header">123</h4>
        <p class="list-group-item-text">asfasfasfsafasfasf</p>
    </a>
    <a href="#" class="list-group-item">
        <h4 class="list-grouop-item-header">123</h4>
        <p class="list-group-item-text">asfasfasfsafasfasf</p>
    </a>
</div>
</div>
</div>
</div>

<?php
	require 'common/footer.php';
?>
