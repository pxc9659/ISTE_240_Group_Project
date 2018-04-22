<?php
	$title='PALTS : ftp';
	$path='../../';
	$nav='ftp';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>Network Services: ftp</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the ftp command being ran.">
</picture>
<p>
	The ftp command in UNIX is used to transfer files to and from a remote host.
	This command is predominantly used for the purpose of file transfer.
	UNIX has built in command line prompts to make a proper FTP connection.
	 
</p>
<p>
	There are also some useful arguments that can be used with ftp to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox"> user@hostname$ ftp -4 </pre>
<p class="preText">
	This command will use only IPv4 to contact the host.
	 This can be used to check if IPv4 is up.
	
</p>
<pre class="preBox"> user@hostname$ ftp -6  </pre>
<p class="preText">
	This command will use only IPv6 to contact the host.
	 This can be used to check if IPv6 is up.
</p>

<pre class="preBox"> user@hostname$ ftp -p </pre>
<p class="preText">
	This ftp command uses passive mode for tansfer of data.
	It allows the transferring of files where firewall is present.
	
</p>

<pre class="preBox"> user@hostname$ ftp -d </pre>
<p class="preText">
	This ftp command enables debugging.
	It is a useful command for finding errors/bugs.
	
	
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


