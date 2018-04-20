<?php
	$title='PALTS : ping';
	$path='../../';
	$nav='ping';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>System Information: ping</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the df command being ran.">
</picture>
<p>
	The function of a ping command is to send ICMP ECHO_REQUEST packets to host and reports the response from server.
	 It is useful in testing if a remote server is available and checking network related issues.
</p>
<p>
	There are also some useful arguments that can be used with ping to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ ping -c</pre>
<p class="preText">
	This command will limit the number of packets sent to the network host.
	 It will cause the ping to exit after sending the specified number of packets.
	 It makes it easier for users to comprehend the size of data.
	 
</p>
<pre class="preBox">user@hostname$ ping -D</pre>
<p class="preText">
	This ping command will have an added UNIX timestamp at the start of each line.
	This is useful when to check and document the time when the network tests were completed.
</p>

<pre class="preBox">user@hostname$ ping -4</pre>
<p class="preText">
	This command is used to check if the IPv4 interface is up.
	It is a useful command in diagnosing any network failures.
</p>

<pre class="preBox">user@hostname$ ping -6</pre>
<p class="preText">
	This command is used to check if the IPv6 interface is up.
	It is a useful command in diagnosing any network failures.
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


