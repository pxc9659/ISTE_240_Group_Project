<?php
	$title='PALTS : rm';
	$path='../../';
	$nav='rm';
	include($path.'assets/inc/head.php');
?>
<hr>
<h2>The Command Line: rm</h2>
<hr>
<picture class="titlePicture">
	<source media="(max-width: 450px)" srcset="https://i.imgur.com/yghLrlQ.png">
	<source media="(max-width: 1024px)" srcset="https://i.imgur.com/3roIE52.png">
	<img src="https://i.imgur.com/RH2Lb2A.png" alt="An example of the rm command being ran.">
</picture>
<p>
	This is the command used to remove files.
	 You might think that removing files is trivial, but rm is a very powerful tool that has a number of useful options to make sure that you end up deleting the files that you want to delete.
</p>
<p>
	The standard command is written something like the following: ‘rm filename.ext’.
	 However, a few of the following options can be used in certain cases:
</p>
<pre class="preBox">user@hostname$ rm -f</pre>
<p class="preText">
	This argument is used to force the file to delete, ignoring errors such as the existence of the file.
</p>
<pre class="preBox">user@hostname$ rm -i</pre>
<p class="preText">
	This will prompt the user to confirm before removing the file.
	 This could be useful when working with sensitive information, so that a user could not delete important data without confirming.
</p>
<pre class="preBox">user@hostname$ rm -r</pre>
<p class="preText">
	This stands for recursive, and will remove the subfolders and files of a parent folder.
	 This argument is commonly used with the f argument, so that parent folders along with their contents can be removed with little intervention on the part of the user.
</p>
<?php
	include($path.'assets/inc/footer.php');
?>


