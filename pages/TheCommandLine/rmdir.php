<?php
	$title='PALTS : rmdir';
	$path='../../';
	$nav='rmdir';
	include($path.'assets/inc/head.php');
	include($path.'assets/inc/nav.php');
?>
<body>
	<main>
		<h2>rmdir</h2>
		<p>
			This command is similar to mkdir in options but has the opposite purpose.
			 It removes empty directories, since rm will give the user an error if they try and use rm without the -r tag to remove a directory.
			 There is one argument that could be useful to the user.
		</p>
			<pre class="preBox">-p</pre>
			<p class="preText">
				Removes parent directories that are empty as well.
				 The command ‘rmdir folder/inside’ would remove the inside and folder directories, provided that they are both empty.
			</p>
<?php
	include($path.'assets/inc/footer.php');
?>


