<?php
	require_once 'inc/Handler.class.php';
	require 'common/header.php';
	
	//过滤
	$page=isset($_GET['page']) ? $_GET['page'] : 1 ;
	$resFile=Handler::queryNewSharing($page);
	$resCount=Handler::getAllCount();
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
					<h4 class="list-grouop-item-header" by="<?php echo $row['f_user']; ?>" name="<?php echo $row['f_id'] ?>"><?php echo $row['f_name']; ?></h4>
					<div class="list-group-item-text">
					<?php $tags=explode(',',$row['f_tag']); ?>
					<?php foreach($tags as $tag){ ?>
						<a href="/result.php?keyword=<?php echo $tag ?>"><span class="label label-default"><?php echo $tag; ?></span></a>
					<?php } ?>
					<div class="text-right text-down"><a href="#"><span class="label label-success label-down glyphicon glyphicon-save">DOWN</span></a></div>
					</div>
				</span>
				<?php } ?>
			<?php } ?>
		</div>
		<div id="pagination">
			<ul class="pagination">
				<li <?php if($page-1<=0) echo 'class="disabled"' ?>><a href="/new-sharing.php?page=<?php echo ($page-1<=0)?1:$page-1; ?>">&laquo;</a></li>
				<?php
					for($p=1;$p<=$pagination;$p++){
						if($p==$page) echo '<li class="active"><a href="/new-sharing.php?page='.$p.'">'.$p.'</a></li>';
						else echo '<li><a href="/new-sharing.php?page='.$p.'">'.$p.'</a></li>';
				} ?>
				<li <?php if($page+1>$pagination) echo 'class="disabled"' ?>><a href="/new-sharing.php?page=<?php echo ($page+1>$pagination)?$pagination:$page+1; ?>">&raquo;</a></li>
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