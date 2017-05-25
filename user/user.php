<?php
	session_start();
	if(!$_SESSION['user']){
		header('location:index.php');
		exit(0);
	}
	require 'layouts/user_header.php';
	
?>

<div id="content">
<a href="upload.php" >upload</a>
</div>

<?php
	require 'layouts/user_footer.php'
?>