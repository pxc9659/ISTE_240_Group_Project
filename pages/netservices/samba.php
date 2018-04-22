<?php
	$title='PALTS : samba';
	$path='../../';
	$nav='samba';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>Network Services: samba</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the samba command being ran.">
</picture>
<p>
	Samba enables the user to do print and file sharing across different platforms.
	It implements SMB/CIFS protocol.
	It is useful in integrating UNIX environment and desktop into directory environments.
	 
</p>
<p>
	There are also some useful arguments that can be used with samba to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ smbclient -L myhost</pre>
<p class="preText">
	This command will list all available shares on myhost.
	 The I flag is used when the name of the netbios does not match the name of tcp/ip host names.
	 
</p>

<pre class="preBox">user@hostname$ smbclient -L ftp -I</pre>
<p class="preText">
	This command will give the user a view of available services on a server.
	 The I flag is used when the name of the netbios does not match the name of tcp/ip host names.
	 
</p>
<pre class="preBox">user@hostname$ smbclient '\\pc\share' "" -N -Tx myback.tar</pre>
<p class="preText">
	This command restores myback.tar into share on pc.
	 There will be no prompt for the user to type in a password.
	 
</p>

<pre class="preBox">user@hostname$ scp -p vk116@host.com:/home/vk116/documents /home/vk116/downloads/documents </pre>
<p class="preText">
	This scp command will maintain and preserve the modification and access times.
	It is a good command to understand the available space in your system.
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


