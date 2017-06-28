<?php
	require_once 'inc/Handler.class.php';
	require 'common/header.php';
	
	//过滤
	if(isset($_GET['keyword'])){
		$page=isset($_GET['page']) ? $_GET['page'] : 1 ;
		$text=$_GET['keyword'];
		$resFile=Handler::search($text,$page);
	}
	$resCount=Handler::getSearchCount($text);
	$pagination=ceil($resCount/PER_PAGE_NUM);
?>

<div id="content">
<div id="search-result" class="panel panel-default">
<div class="panel-heading">Find Something Interesting...</div>
<div class="panel-body">
	<div id="file-list">
		<div class="list-group">
			<?php if($resFile!=null){ ?>
				<?php foreach($resFile as $row){ ?>
				<span class="list-group-item">
					<h4 class="list-grouop-item-header" name="<?php echo $row['f_id'] ?>"><?php echo $row['f_name']; ?></h4>
					<p class="list-group-item-text"><?php echo $row['f_tag']; ?></p>
				</span>
				<?php } ?>
			<?php } ?>
		</div>
		<div id="pagination">
			<ul class="pagination">
				<li <?php if($page-1<=0) echo 'class="disabled"' ?>><a href="/result.php?keyword=<?php echo $text; ?>&page=<?php echo ($page-1<=0)?1:$page-1; ?>">&laquo;</a></li>
				<?php
					for($p=1;$p<=$pagination;$p++){
						if($p==$page) echo '<li class="active"><a href="/result.php?keyword='.$text.'&page='.$p.'">'.$p.'</a></li>';
						else echo '<li><a href="/result.php?keyword='.$text.'&page='.$p.'">'.$p.'</a></li>';
				} ?>
				<li <?php if($page+1>$pagination) echo 'class="disabled"' ?>><a href="/result.php?keyword=<?php echo $text; ?>&page=<?php echo ($page+1>$pagination)?$pagination:$page+1; ?>">&raquo;</a></li>
			</ul>
		</div>
	</div>
	<div id="file-detail">
		<div class="panel panel-default">
			<div class="panel-heading">Choose Something...</div>
			<div class="panel-body">Choose Something...</div>
		</div>
	</div>
</div>
</div>
</div>

<?php
	require 'common/footer.php';
?>
