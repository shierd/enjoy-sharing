<?php
	require 'user_header.php';
	$user=new User($_SESSION['user'],$_SESSION['pass']);
?>
<div id="header">
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Dashboard</a>
		</div>
		<div class="navbar-text navbar-right">
			Welcome <?php echo $user->getUname(); ?>
		</div>
	</nav>
</div>
