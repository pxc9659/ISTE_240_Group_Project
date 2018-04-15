<?php
	$title='PALTS : rmdir';
	$path='../../';
	$nav='rmdir';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>The Command Line: rmdir</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/IOXNv8f.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/Jb8WnOp.png">
	<img src="https://i.imgur.com/iLvZmLm.png" alt="An example of the rmdir command being ran.">
</picture>
<p>
	This command is similar to mkdir in options but has the opposite purpose.
	 It removes empty directories, since rm will give the user an error if they try and use rm without the -r tag to remove a directory.
	 There is one argument that could be useful to the user.
</p>
<pre class="preBox">user@hostname$ rmdir -p</pre>
<p class="preText">
	Removes parent directories that are empty as well.
	 The command ‘rmdir folder/inside’ would remove the inside and folder directories, provided that they are both empty.
</p>
<?php
	include($path.'assets/inc/footer.php');
?>


