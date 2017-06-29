<?php

	require 'inc/Handler.class.php';
	require 'common/header.php';
	
	$tags=Handler::getTags();
?>

<div id="content">
	<div>
		<canvas width="1024" height="520" id="tagCanvas">
            <ul>
				<?php if($tags!=null){ ?>
					<?php foreach($tags as $row){ ?>
					<li><a href="/result.php?keyword=<?php echo $row['t_name']; ?>"><?php echo $row['t_name']; ?></a></li>
					<?php } ?>
				<?php } ?>
            </ul>
        </canvas>
	</div>
	<div id="search">
		<form class="form-inline" action="result.php">
            <div class="input-group">
                <input class="form-control" id="kwd" name="keyword" type="text" placeholder="Type everything what you want..." />
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
