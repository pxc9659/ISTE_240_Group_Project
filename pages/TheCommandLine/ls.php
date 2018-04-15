<?php
	$title='PALTS : ls';
	$path='../../';
	$nav='ls';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>The Command Line: ls</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the ls command being ran.">
</picture>
<p>
	This command is used when you want to browse the file structure of your system.
	 If you open a Terminal window and type ls, it will show you the files in your home directory.
	 This is because by default, terminal windows start in your home directory.
	 You can use pwd to see what the ls will return.
</p>
<p>
	There are also some useful arguments that can be used with ls to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ ls -h</pre>
<p class="preText">
	Makes the file sizes human readable.
	 By default, they are displayed in bytes, and even a picture is a lot of bytes.
	 If you use -h, it will display in KB or MB, and the number will be much more intelligible.
</p>
<pre class="preBox">user@hostname$ ls -l</pre>
<p class="preText">
	Displays a long listing of the directory.
	 This list will be vertical instead of horizontal, and will include the file permissions, the date modified, the size of the file, and the file name.
</p>
<pre class="preBox">user@hostname$ ls -a</pre>
<p class="preText">
	Displays all the files in a directory.
	 By default, UNIX command line hides any file beginning with a period.
	 By specifying -a, the ls command will display these files in the list.
</p>
<pre class="preBox">user@hostname$ ls -R</pre>
<p class="preText">
	Goes through the directory hierarchy recursively.
	 If there are folders below the one you called ls on, the -R argument will list those folders as well.
</p>
<?php
	include($path.'assets/inc/footer.php');
?>


