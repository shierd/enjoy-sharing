<?php
	session_start();
	if(!$_SESSION['user']){
		header('location:index.php');
		exit(0);
	}
	require 'layouts/user_header.php';
?>

<div id="content">
<form id="form_upload" enctype="multipart/form-data">
	introduction:<textarea name="intro" cols="50" rows="6"></textarea></br>
	tags:<input type="text" name="tags" /><br />
	<input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
	file:<input type="file" name="file" />
	<button id="btn_upload" type="button" >上传</button>
</form>
</div>

<script src="js/user_upload.js" type="text/javascript" ></script>

<?php
	require 'layouts/user_footer.php';
?>