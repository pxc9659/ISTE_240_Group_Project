<?php
	$title='PALTS : mkdir';
	$path='../../';
	$nav='mkdir';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>The Command Line: mkdir</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/B68j3qE.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/yYEWJuA.png">
	<img src="https://i.imgur.com/BHXiqn1.png" alt="An example of the mkdir command being ran.">
</picture>
<p>
	This command is used to make directories.
	 Directories are similar to physical folders, in that they can contain other folders and files.
	 This command has a few arguments that make it more useful:
</p>
<pre class="preBox">user@hostname$ mkdir -p</pre>
<p class="preText">
	Creates parent directories if they do not exist.
	 If the command ‘mkdir -p folder/inside’ is executed, assuming the folder is empty, this command will create both the ‘folder’ and ‘inside’ directories.
</p>
<pre class="preBox">user@hostname$ mkdir -m</pre>
<p class="preText">
	Allows the user to define custom permissions on the folder being created.
	 This is useful for combining two commands into one.
	 Now, the user does not have to change the permissions of the folder after creation.
	 An example of a way this flag could be used is ‘mkdir -m 777 /folder/inside’.
</p>
<?php
	include($path.'assets/inc/footer.php');
?>


