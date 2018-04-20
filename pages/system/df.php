<?php
	$title='PALTS : df';
	$path='../../';
	$nav='df';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>System Information: df</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the df command being ran.">
</picture>
<p>
	The df command stands for disk filesystem.
	This command is pretty similar to du command.
	 It is used to get a detailed summary of available and used disk space of a file system.
</p>
<p>
	There are also some useful arguments that can be used with df to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ df -h</pre>
<p class="preText">
	This command will have the data size in human readable form.
	 The user will be able to see the size of the data in Bytes, Kilobytes, Megabytes, etc.
	 It makes it easier for users to comprehend the size of data.
	 
</p>
<pre class="preBox">user@hostname$ df -a</pre>
<p class="preText">
	This df command displays all file systems including dummy file systems.
	It displays their disk usage and memory utilization.
</p>

<pre class="preBox">user@hostname$ df -T</pre>
<p class="preText">
	This command df command is used to check the type of each file system.
	It is a useful command to execute if you are searching for a certain file type.
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


