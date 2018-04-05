<?php
	$title='PATLS : ls';
	$path='../../';
	$nav='ls';
	include($path.'assets/inc/header.php');
?>
<body>
	<div class="content">
		<h1>ls</h1>
		<p>
			This command is used when you want to browse the file structure of your system.
			 If you open a Terminal window and type ls, it will show you the files in your home directory.
			 This is because by default, terminal windows start in your home directory.
			 You can use pwd to see what the ls will return.
		</p>
		<p>
			There are also some useful arguments that can be used with ls to make more sense of the results.
			 The most useful are:
		</p>
		<ul>
			<li><pre>-h</pre></li>
			Makes the file sizes human readable.
			 By default, they are displayed in bytes, and even a picture is a lot of bytes.
			 If you use -h, it will display in KB or MB, and the number will be much more intelligible.
			<li><pre>-l</pre></li>
			Displays a long listing of the directory.
			 This list will be vertical instead of horizontal, and will include the file permissions, the date modified, the size of the file, and the file name.
			<li><pre>-a</pre></li>
			Displays all the files in a directory.
			 By default, UNIX command line hides any file beginning with a period.
			 By specifying -a, the ls command will display these files in the list.
			<li><pre>-R</pre></li>
			Goes through the directory hierarchy recursively.
			 If there are folders below the one you called ls on, the -R argument will list those folders as well.
		</ul>
	</div>
</body>
<?php
	include($path.'assets/inc/footer.php');
?>


