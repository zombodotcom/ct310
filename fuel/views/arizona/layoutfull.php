<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CT310 Examples</title>

		<?php echo Asset::css('bootstrap.min.css'); ?>
		<?php echo Asset::css('scrolling-nav.css'); ?>
		<?php echo Asset::js('jquery.min.js'); ?>
		<?php echo Asset::js('scrolling-nav.js'); ?>
		<?php echo Asset::js('jquery.easing.min.js'); ?>
		<?php echo Asset::js('bootstrap.bundle.min.js'); ?>
		<?php echo Asset::css('style.css'); ?>
		<?php echo Asset::add_path('img');?>


	</head>
	<body>

		<div id="head">
			<h1>CT310 States Assignment - Arizona</h1>
		</div>
		<div id="mainContent">

			<?=$content; ?>
		</div>
		<div id="footer">
			<center>Part of a <a href="https://www.cs.colostate.edu/~ct310/">CT310</a> Course Project </center>
		</div>
	</body>
</html>
