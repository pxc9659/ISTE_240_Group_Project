<?php
	$title='PALTS : nfs';
	$path='../../';
	$nav='nfs';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>Network Services: nfs</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the nfs command being ran.">
</picture>
<p>
	nfs allows the user to mount everything or just some portions of a file system.
	It uses remote procedure calls for requests between server and client.
	
	 
</p>
<p>
	There are also some useful arguments that can be used with nfs to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ mount -t nfs 192.168.0.100:/nfsshare /mnt/nfsshare</pre>
<p class="preText">
	This command will mount the directory in the user's server for local access.
	 This is one of the most important command on a nfs client.
	 
</p>
<pre class="preBox">user@hostname$ umount /mmt/nfssharing</pre>
<p class="preText">
	This command will unmount the directory /mmt/nfssharing.
	 You can execute this command once you are done with file sharing.
	 
</p>

<pre class="preBox">user@hostname$ showmount -d </pre>
<p class="preText">
	This command will list all the subdirectories.
	 It can be used to get an idea of the file structure.
	 
</p>

<pre class="preBox">user@hostname$ showmount -e </pre>
<p class="preText">
	This command will list out every available share on your system.
	 It is a good command to understand the available space in your system.
	 
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


