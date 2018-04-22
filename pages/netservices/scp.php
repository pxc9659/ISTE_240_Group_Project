<?php
	$title='PALTS : scp';
	$path='../../';
	$nav='scp';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>Network Services: scp</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the scp command being ran.">
</picture>
<p>
	The scp command stands for secure copy.
	This command copies files over an encrypted and secure network connection.
	This command is pretty similar to cp command.
	 
</p>
<p>
	There are also some useful arguments that can be used with scp to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ scp -r vk116@host.com:/home/vk116/documents /home/vk116/downloads/documents </pre>
<p class="preText">
	This scp command will copy all the files in the remote directory /home/vk116/documents on the server host.com to the local directory /home/vk116/downloads/documents.
	 It will include all the sub directories and the files in it.
	 
</p>
<pre class="preBox">user@hostname$ scp -l 100 viggy@host.com:/home/vk116/viggy.zip  </pre>
<p class="preText">
	This command transfers the remote file /home/vk116/viggy.zip on host.com as the user "viggy" into the local working directory.
	It limits the transfer rate to 100 kilobytes per second.
</p>

<pre class="preBox">user@hostname$ scp -p vk116@host.com:/home/vk116/documents /home/vk116/downloads/documents </pre>
<p class="preText">
	This scp command will maintain and preserve the modification and access times.
	It also preserves different modes from the original file.
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


