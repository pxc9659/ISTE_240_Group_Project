<?php
	$title='PALTS : ssh';
	$path='../../';
	$nav='ssh';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>Network Services: ssh</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the ssh command being ran.">
</picture>
<p>
	The ssh command is used to log into a remote host and execute commands in it.
	This command is a must know for all UNIX beginners.
	It is the most commanly used command to log into a remote server.
	 
</p>
<p>
	There are also some useful arguments that can be used with ssh to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox"> ssh -l username remote-server</pre>
<p class="preText">
	This ssh command will login to a remote server .
	 Once the command is executed,it prompts the user for a password.
	 If the user is logging in for the first time, it will give out a message saying host key is not found and should type yes to continue.
	 From the next time, the host key will be cached and you only will require to enter a password.
	 
</p>
<pre class="preBox"> ssh user@remote-host "ls test"  </pre>
<p class="preText">
	This command will run the unix command "ls" on the remote server.
	You can execute any unix command using the above format from your local host.
</p>

<pre class="preBox">ssh -V </pre>
<p class="preText">
	This ssh command displays the version of ssh.
	It is used to check if there is a need in upgrade of the ssh installed on the unix system.
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


