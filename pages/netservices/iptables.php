<?php
	$title='PALTS : iptables';
	$path='../../';
	$nav='iptables';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>Network Services: iptables</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the iptables command being ran.">
</picture>
<p>
	The iptables command is used to setup and examine the tables of IP packet filter rules in UNIX.
	More than one table can be defined.
	Each table has a built in chain and can also be user-defined.
	 
</p>
<p>
	There are also some useful arguments that can be used with iptables to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ iptables -v </pre>
<p class="preText">
	This iptables command will give out a verbose output.
	 It gives out the interface name and TOS masks .
	 The packet and byte counters are listed as well.
</p>
<pre class="preBox">user@hostname$ iptables -n  </pre>
<p class="preText">
	This iptables command gives out a numeric output.
	Port numbers and IP addresses wll be printed in numeric format.
</p>

<pre class="preBox">user@hostname$ iptables -x </pre>
<p class="preText">
	This iptables command will display the value of byte and packet counters without any approximation.
	
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


