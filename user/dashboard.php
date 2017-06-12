<?php
	session_start();
	if(!$_SESSION['user']){
		header('location:index.php');
		exit(0);
	}
	require_once('../inc/config.php');
	require_once(USER.'inc/User.class.php');
	require 'layouts/user_header.php';
	
	$user=new User($_SESSION['user'],$_SESSION['pass']);
?>

<div id="content">
Welcome <?php echo $user->getUname(); ?><br />
<a href="upload.php" >Upload File</a><br />
<a href="userfile.php">My File</a>
</div>

<?php
	require 'layouts/user_footer.php';
?>