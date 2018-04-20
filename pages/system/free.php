<?php
	$title='PALTS : free';
	$path='../../';
	$nav='free';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>System Information: free</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the free command being ran.">
</picture>
<p>
	The free command provides information about utilized and unnutilized memory space.
	This command also gives information about swap space which is a part of hard disk drive that simulates additional main memory.
	 
</p>
<p>
	There are also some useful arguments that can be used with free to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ free -t</pre>
<p class="preText">
	This free command will give out an additional line with total physical memory and swap space.
	 It gives a good summary of total memory and swap space used.
	 	 
</p>
<pre class="preBox">user@hostname$ free -s 5</pre>
<p class="preText">
	This command followed by integer 5 will keep giving updated output every 5 seconds.
	This keeps the user updated frequently.
</p>

<pre class="preBox">user@hostname$ free -m</pre>
<p class="preText">
	This free command will show all data size in megabytes.
	You can use the -g flag, if you want the data size in gigabytes.
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


