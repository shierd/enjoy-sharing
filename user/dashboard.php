<?php
	session_start();
	if(!$_SESSION['user']){
		header('location:index.php');
		exit(0);
	}
	require_once('../inc/config.php');
	require_once(USER.'inc/User.class.php');
	require 'layouts/user_navbar.php';
?>

<div id="content">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="upload.php" >Upload File</a></li>
				<li><a href="userfile.php">My File</a></li>
			</ul>
		</div>
		<div class="col-md-10 col-md-offset-2 main">
			<h2>Upload File</h2>
		</div>
	</div>
	</div>
</div>

<?php
	require 'layouts/user_footer.php';
?>
