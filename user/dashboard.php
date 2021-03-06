<?php
	session_start();
	if(!$_SESSION['user']){
		header('location:index.php');
		exit(0);
	}
	require_once('../inc/config.php');
	require_once(USER.'inc/User.class.php');
	require 'layouts/user_navbar.php';
	
	$files=$user->getUfiles();
?>

<div id="content">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a for="userfile">My File</a></li>
				<li><a for="upload">Upload File</a></li>
			</ul>
		</div>
		<div class="col-md-10 col-md-offset-2" id="main">
			<h2 class="tab-title">My File</h2>
			<div class="tab-main">
				<div id="upload" class="tab-item">
					<form id="form_upload" enctype="multipart/form-data">
						<div class="form-group">
							<input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
							<label for="file">File:</label>
							<input id="file" type="file" name="file" />
						</div>
						<div class="form-group">
							<label for="introduction">Introduction:</label>
							<textarea id="introduction" class="form-control" name="intro" rows="3" placeholder="Say something or not..."></textarea>
						</div>
						<div class="form-group">
							<label for="tags">Tags:</label>
							<input class="form-control" id="tags" type="text" name="tags" placeholder="Separate by ','" />
						</div>
						<button class="btn btn-default" id="btn_upload" type="button" >上传</button>
					</form>
					<script src="js/user_upload.js" type="text/javascript" ></script>
				</div>
				<div id="userfile" class="tab-item active">
					<div class="list-group">
						<?php if($files!=null){ ?>
							<?php for($i=0;$i<count($files['name']);$i++){ ?>
							<span class="list-group-item">
								<h4 class="list-grouop-item-header" name="<?php echo "1" ?>"><?php echo $files['name'][$i]; ?></h4>
								<div class="list-group-item-text">
								<?php $tags=explode(',',$files['tag'][$i]); ?>
								<?php if($tags[0]!=""){ ?>
								<?php foreach($tags as $tag){ ?>
									<a href="/result.php?keyword=<?php echo $tag ?>"><span class="label label-default"><?php echo $tag; ?></span></a>
								<?php } ?>
								<?php }else{ ?>
									No Tags...
								<?php } ?>
									<div class="text-right text-delete"><a href="#" name="delete"><span class="label label-danger label-down glyphicon glyphicon-save">DETELE</span></a></div>
									<div class="text-right text-down"><a href="#"><span class="label label-success label-down glyphicon glyphicon-trash">DOWN</span></a></div>
								</div>
							</span>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
				<script src="js/user_file.js" type="text/javascript" ></script>
			</div>
		</div>
	</div>
	</div>
</div>

<?php
	require 'layouts/user_footer.php';
?>
