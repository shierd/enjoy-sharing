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
                <!--<li><a href="#">Google</a></li>
                <li><a href="#">Fish</a></li>
                <li><a href="#">Chips</a></li>
                <li><a href="#">Salt</a></li>
                <li><a href="#">Vinegar</a></li>
				<li><a href="#">Baidu</a></li>
                <li><a href="#">PK</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">ABC</a></li>
                <li><a href="#">Version</a></li>
				<li><a href="#">Google</a></li>
                <li><a href="#">Fish</a></li>
                <li><a href="#">Chips</a></li>
                <li><a href="#">Salt</a></li>
                <li><a href="#">Vinegar</a></li>
                <li><a href="#">Baidu</a></li>
                <li><a href="#">PK</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">ABC</a></li>
                <li><a href="#">Version</a></li>-->
					<?php } ?>
				<?php } ?>
            </ul>
        </canvas>
	</div>
	<div id="search">
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
