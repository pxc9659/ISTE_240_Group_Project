<?php
	$title='PALTS : wget';
	$path='../../';
	$nav='wget';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>Network Services: scp</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the wget command being ran.">
</picture>
<p>
	The wget command stands for web get.
	This command downloads files over a desired network of user's choice.
	It supports HTTP/HTTPS and FTP protocols.
	It also supports retrieval through HTTP proxies
	 
</p>
<p>
	There are also some useful arguments that can be used with wget to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ wget -b http://www.123.com/page.php</pre>
<p class="preText">
	This wget command will ownload the file in the background.
	 It is good for multitasking as you can work on something else in the foreground while a file is being downloaded in the background.
	 
</p>
<pre class="preBox">user@hostname$ wget -c http://www.123.com/page.exp.zip </pre>
<p class="preText">
	This command will resume an already partially downloaded file.
	It is useful command to download files that were interrupted because of other factors.
</p>

<pre class="preBox">user@hostname$ wget -h http://www.123.com/page.php </pre>
<p class="preText">
	This wget command prints out help messages with every possible options of the command that is available with wget command line options.
	It serves as a good manual for every possible wget commands.
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


