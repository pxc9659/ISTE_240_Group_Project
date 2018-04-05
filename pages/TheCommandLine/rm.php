<?php
	$title='PATLS : rm';
	$path='../../';
	$nav='rm';
	include($path.'assets/inc/header.php');
?>
<body>
	<div class="content">
		<h1>rm</h1>
		<p>
			This is the command used to remove files.
			 You might think that removing files is trivial, but rm is a very powerful tool that has a number of useful options to make sure that you end up deleting the files that you want to delete.
		</p>
		<p>
			The standard command is written something like the following: ‘rm filename.ext’.
			 However, a few of the following options can be used in certain cases:
		</p>
		<ul>
			<li><pre>-f</pre></li>
			This argument is used to force the file to delete, ignoring errors such as the existence of the file.
			<li><pre>-i</pre></li>
			This will prompt the user to confirm before removing the file.
			 This could be useful when working with sensitive information, so that a user could not delete important data without confirming.
			<li><pre>-r</pre></li>
			This stands for recursive, and will remove the subfolders and files of a parent folder.
			 This argument is commonly used with the f argument, so that parent folders along with their contents can be removed with little intervention on the part of the user.
		</ul>
	</div>
</body>
<?php
	include($path.'assets/inc/footer.php');
?>


