<?php
	$title='PALTS : w';
	$path='../../';
	$nav='w';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>System Information: w</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/g6jGV1c.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/rADcDft.png">
	<img src="https://i.imgur.com/EOU7AKS.png" alt="An example of the w command being ran.">
</picture>
<p>
	w command displays the list of users who are logged into the server and their current activities.
	 This command is pretty similar to who command but the w command displays more information about users logged into the system.
	 
	 
</p>
<p>
	There are also some useful arguments that can be used with w to make more sense of the results.
	 The most useful are:
</p>
<pre class="preBox">user@hostname$ w -s</pre>
<p class="preText">
	It hides the login time or the PCPU times.
	 This flag is useful when the user doesn't want a lot of information in the output.
	 It helps the user in getting the main information without the unwanted information.
	 
</p>
<pre class="preBox">user@hostname$ w -u</pre>
<p class="preText">
	This command will ignore the usernames of the users logged in.
	This flag can be used when the username is not of importance to you.
</p>
<pre class="preBox">user@hostname$ w -f</pre>
<p class="preText">
	It will show the remote hostname field.
	By default, the remote hostname field will not be printed without the 'f' flag.
</p>

<?php
	include($path.'assets/inc/footer.php');
?>


