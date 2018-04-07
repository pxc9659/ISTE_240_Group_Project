<?php
	$title='PALTS : mkdir';
	$path='../../';
	$nav='';
	include($path.'assets/inc/header.php');
?>
<body>
	<main>
		<h2>mkdir</h2>
		<p>
			This command is used to make directories.
			 Directories are similar to physical folders, in that they can contain other folders and files.
			 This command has a few arguments that make it more useful:
		</p>
		<ul>
			<li><pre class="preBox">-p</pre></li>
			<p>
				Creates parent directories if they do not exist.
				 If the command ‘mkdir -p folder/inside’ is executed, assuming the folder is empty, this command will create both the ‘folder’ and ‘inside’ directories.
			</p>
			<li><pre class="preBox">-m</pre></li>
			<p>
			Allows the user to define custom permissions on the folder being created.
			 This is useful for combining two commands into one.
			 Now, the user does not have to change the permissions of the folder after creation.
			 An example of a way this flag could be used is ‘mkdir -m 777 /folder/inside’.
			</p>
		<ul>
	</main>
</body>
<?php
	include($path.'assets/inc/footer.php');
?>


