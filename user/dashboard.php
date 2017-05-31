<?php
	session_start();
	if(!$_SESSION['user']){
		header('location:index.php');
		exit(0);
	}
	require 'layouts/user_header.php';
	
?>

<div id="content">
<a href="upload.php" >Upload File</a><br />
<a href="userfile.php">My File</a>
</div>

<?php
	require 'layouts/user_footer.php'
?>