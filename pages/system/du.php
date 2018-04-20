<?php
	$title='PALTS : du';
	$path='../../';
	$nav='du';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>System Information: du</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the du command being ran.">
</picture>
<p>
	du command is an UNIX command used to find information about disk usage of directories and files.
	 This command displays the sizes of files and directories recursively.
</p>
<p>
	There are also some useful arguments that can be used with du to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ du -h</pre>
<p class="preText">
	This command will have the data size in human readable form.
	 The user will be able to see the size of the data in Bytes, Kilobytes, Megabytes, etc.
	 It makes it easier for users to comprehend the size of data.
	 
</p>
<pre class="preBox">user@hostname$ du -s</pre>
<p class="preText">
	This will give the user a total usage of the disk in a directory.
	This command is used when the user wants to know the disk usage of a certain directory.
</p>
<pre class="preBox">user@hostname$ du -ah</pre>
<p class="preText">
	This command displays disk usage of all files and directories in human readable format.
	It will be easier for user to understand as the data size will be in terms of Bytes.
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


