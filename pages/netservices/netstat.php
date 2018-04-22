<?php
	$title='PALTS : netstat';
	$path='../../';
	$nav='netstat';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>Network Services: netstat</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the netstat command being ran.">
</picture>
<p>
	The netstat command displays information related to network such as network connections, routing tables, etc.
	It gives the user an overall view of what's happening in the network.
	This command is an useful tool for system administrators.
	 
</p>
<p>
	There are also some useful arguments that can be used with netstat to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ netstat -a </pre>
<p class="preText">
	This netstat command will list out all the ports irrespective of it's state..
	 It lists out both listening and non listening ports.
	 
</p>
<pre class="preBox">user@hostname$ netstat -at </pre>
<p class="preText">
	This netstat command will list out all the tcp ports.
	 It lists out both listening and non listening ports.
	 
</p>

<pre class="preBox">user@hostname$ netstat -au </pre>
<p class="preText">
	This netstat command will list out all the udp ports.
	 It lists out both listening and non listening ports.
	 
</p>

<pre class="preBox">user@hostname$ netstat -l </pre>
<p class="preText">
	This netstat command will list out only the listening ports.
	 It can be used when non listening ports aren't of any importance to the user.
	 
</p>

<pre class="preBox">user@hostname$ netstat -s </pre>
<p class="preText">
	This netstat command shows statistics for all ports.
	 It is a good tool to get the overall summary.
	 
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


