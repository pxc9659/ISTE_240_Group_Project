<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo $path;?>assets/css/outlineMobile.css">
	<link rel="icon" href="<?php echo $path;?>assets/images/coloredIcon.png">
	<script src="<?php echo $path;?>assets/scripts/navigation.js"></script>
	<script src="<?php echo $path;?>assets/scripts/quiz.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>
		<?php echo $title; ?>
	</title>
</head>
<body onload="getActive();">
<?php
	include($path.'assets/inc/nav.php');
?>
<div class="banner">
	<img src="<?php echo $path;?>assets/images/wordsDark2.svg" class="banner" alt="Pop and Lock the Stack">
</div>
	<main>
