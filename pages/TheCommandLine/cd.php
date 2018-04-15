<?php
	$title='PALTS : cd';
	$path='../../';
	$nav='cd';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>The Command Line: cd</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/0KFH9LL.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/E2uwS8H.png">
	<img src="https://i.imgur.com/d9VROEQ.png" alt="An example of the cd command.">
</picture>
<p>
	This is a very simple command, and does not require much explanation.
	 It stands for “change directory”, and is used to move about the file system in bash.
	 It does not have any arguments, and has no man page, since it has a very simple purpose.
	 The structure of the command is ‘cd /folder/to/navigate/to/’.
	 Note that this command only accepts folder paths, as you can only change into directories.
	 There are certain ways to shorten and abbreviate paths, described below:
</p>
<pre class="preBox">user@hostname$ cd ~</pre>
<p class="preText">
	Refers to the users home folder.
	 This means that the command ‘cd ~/folder’ brings the user to the folder named ‘folder’ in their home directory.
</p>
<pre class="preBox">user@hostname$ cd ..</pre>
<p class="preText">
	Refers to the parent folder of the current location.
	 This can be used to refer to files outside of the folder you are in.
	</p>
<p>
	Note that it is also possible to navigate without using ‘absolute’, or full, path names.
	 If you are located in your home directory, and type ‘cd folder’, it will intelligently deduce that you want to navigate to the folder below where you currently are.
</p>
<?php
	include($path.'assets/inc/footer.php');
?>
