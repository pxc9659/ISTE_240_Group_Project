<?php
	$title='PALTS : ifconfig';
	$path='../../';
	$nav='ifconfig';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>System Information: ifconfig</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the ifconfig command being ran.">
</picture>
<p>
	ifconfig command stands for interface configuration.
	This command is useful in viewing and making changes to the configuration of network interfaces..
	 
</p>
<p>
	There are also some useful arguments that can be used with ifconfig to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ ifconfig -a</pre>
<p class="preText">
	This ifconfig command will give the user an output of all network interfaces on the system.
	 It includes all the inactive network interfaces as well.
	 	 
</p>
<pre class="preBox">user@hostname$ sudo ifconfig eth1 up</pre>
<p class="preText">
	This command will activate the eth1 network interface.
	It will activate eth1 if it is inactive in the first place.
</p>

<pre class="preBox">user@hostname$ sudo ifconfig eth0 down</pre>
<p class="preText">
	This command will activate the eth0 network interface.
	It will activate eth0 if it is inactive in the first place.
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


