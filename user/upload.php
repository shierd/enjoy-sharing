<?php
	session_start();
	if(!$_SESSION['user']){
		header('location:index.php');
		exit(0);
	}
	require 'layouts/user_header.php';
?>

<div id="content">
<form enctype="multipart/form-data" method="POST" action="upload/user_upload.php" >
	<input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
	<input type="file" name="file" />
	<input type="submit" value="上传" />
</form>
</div>

<?php
	require 'layouts/user_footer.php';
?>