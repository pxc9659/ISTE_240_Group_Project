<?php
	$title='PALTS : top';
	$path='../../';
	$nav='top';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>TSystem Information: top</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the top command being ran.">
</picture>
<p>
	This command is useful in allowing users to monitor system resource useage and processes.
	 It is a very important tool that every system administrator should know.
	 It is interactive and allows the user to go through the processes, kill a process,etc.
	 
</p>
<p>
	There are also some useful arguments that can be used with top to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ top -b</pre>
<p class="preText">
	Starts the top command in batch mode.
	 It sends output from "top" to other programs or to a file.
	 
</p>
<pre class="preBox">user@hostname$ top -n</pre>
<p class="preText">
	The n tag specifies the maximum number of iterations
	 This command will run the maximum number of iterations/frames mentioned by the user before ending.
</p>
<pre class="preBox">user@hostname$ top -p'pid'</pre>
<p class="preText">
	This will monitor only the process IDs specified by the user.
	 If the pid value is zero then it will be treated as PID of the top most program.
	 The 'p' flag along with 'u' and 'U' are mutually exclusive.
</p>
<pre class="preBox">user@hostname$ top -s</pre>
<p class="preText">
	It starts the top command with a secure mode.
	 This is far better used in the system configuration files.
</p>
<?php
	include($path.'assets/inc/footer.php');
?>


