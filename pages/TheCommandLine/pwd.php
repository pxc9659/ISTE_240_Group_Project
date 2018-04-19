<?php
	$title='PALTS : pwd';
	$path='../../';
	$nav='pwd';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>The Command Line: pwd</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/aybQkA5.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/mYooWNA.png">
	<img src="https://i.imgur.com/CEEor77.png" alt="An example of the pwd command being ran.">
</picture>
<p>
	This command is used to figure out what folder you are currently located in.
	 Typing ‘pwd’ into a command line will give you the path to this folder.
	 This is useful when you are trying to navigate through directories, and for knowing that you are in the right directory before executing a particular command.
</p>
<pre class="preBox">user@hostname$ pwd</pre>
<p class="preText">
	This is a simple command without much options.
	 Simply enter pwd into the terminal and get the workding directory path.
</p>
<?php
	include($path.'assets/inc/footer.php');
?>


