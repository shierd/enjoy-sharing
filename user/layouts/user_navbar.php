<?php
	require 'user_header.php';
	$user=new User($_SESSION['user'],$_SESSION['pass']);
?>
<div id="header">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="dashboard.php" class="navbar-brand">Dashboard</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li id="user-dropdown" class="dropdown">
						<a herf="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user->getUname(); ?><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li id="logout"><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>
