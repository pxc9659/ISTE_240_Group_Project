<?php
	$title='PALTS : man';
	$path='../../';
	$nav='man';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>The Command Line: man</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/frrZY3l.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/2gaOtQd.png">
	<img src="https://i.imgur.com/1qYeSdh.png" alt="An example of the man command being ran.">
</picture>
<p>
	This command is used to get the manual on how to use a command.
	 If you add ‘man’ before any UNIX command, it will give you the ‘manpage’ for the command.
	 This will display basic information about the command, as well as a list of its arguments and what they do.
	 You can scroll up and down line by line using the arrow keys, or you can scroll down by multiple lines using the spacebar.
	 Man can be used in conjunction with this tool; while this tool only provides the essential information, you can do a deep dive on any of the commands discussed here by using man.
</p>
<pre class="preBox">user@hostname$ man &lt;command&gt;</pre>
<p>
	To use this command you simply type man and the command you want to see the manual page for.
</p>
<?php
	include($path.'assets/inc/footer.php');
?>

