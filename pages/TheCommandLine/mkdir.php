<?php
	$title='PATLS : mkdir';
	$path='../../';
	$nav='';
	include($path.'assets/inc/header.php');
?>
<body>
	<div class="content">
		<h1>mkdir</h1>
		<p>
			This command is used to make directories.
			 Directories are similar to physical folders, in that they can contain other folders and files.
			 This command has a few arguments that make it more useful:
		</p>
		<ul>
			<li><pre>-p</pre></li>
			Creates parent directories if they do not exist.
			 If the command ‘mkdir -p folder/inside’ is executed, assuming the folder is empty, this command will create both the ‘folder’ and ‘inside’ directories.
			<li><pre>-m</pre></li>
			Allows the user to define custom permissions on the folder being created.
			 This is useful for combining two commands into one.
			 Now, the user does not have to change the permissions of the folder after creation.
			 An example of a way this flag could be used is ‘mkdir -m 777 /folder/inside’.
		<ul>
	</div>
</body>
<?php
	include($path.'assets/inc/footer.php');
?>


