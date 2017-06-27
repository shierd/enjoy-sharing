<?php
	require 'common/header.php';
?>

<div id="content">
	<div class="inner">
		<form class="form-inline" action="result.php">
			<div class="input-group">
				<input class="form-control" id="kwd" name="keyword" type="text" placeholder="Type Everything What You Want..." />
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit" >GO</button>
				</span>
			</div>
		</form>
	</div>
</div>

<?php
	require 'common/footer.php';
?>