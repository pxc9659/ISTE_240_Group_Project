<nav id="navDiv" class="sideNav">
	<a href="#" class="closeButton" onclick="closeNavMobile();">&times;</a>
	<a href="<?php echo $path;?>">Home</a>
	<hr>
	<input type="checkbox" name="tcl" id="tcl">
	<label for="tcl">The Command Line</label>
	<ul>
		<li<?php if(isset($nav) && $nav=='introduction'){echo ' class="active" style="background: #4f4e4e"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/introduction.php">&nbsp &nbsp Introduction</a></li>
		<li<?php if(isset($nav) && $nav=='ls'){echo ' class="active" style="background: #4f4e4e"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/ls.php">&nbsp &nbsp ls</a></li>
		<li<?php if(isset($nav) && $nav=='pwd'){echo ' class="active" style="background: #4f4e4e"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/pwd.php">&nbsp &nbsp pwd</a></li>
		<li<?php if(isset($nav) && $nav=='rm'){echo ' class="active" style="background: #4f4e4e"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/rm.php">&nbsp &nbsp rm</a></li>
		<li<?php if(isset($nav) && $nav=='cd'){echo ' class="active" style="background: #4f4e4e"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/cd.php">&nbsp &nbsp cd</a></li>
		<li<?php if(isset($nav) && $nav=='man'){echo ' class="active" style="background: #4f4e4e"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/man.php">&nbsp &nbsp man</a></li>
		<li<?php if(isset($nav) && $nav=='mkdir'){echo ' class="active" style="background: #4f4e4e"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/mkdir.php">&nbsp &nbsp mkdir</a></li>
		<li<?php if(isset($nav) && $nav=='rmdir'){echo ' class="active" style="background: #4f4e4e"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/rmdir.php">&nbsp &nbsp rmdir</a></li>
		<li<?php if(isset($nav) && $nav=='quiz'){echo ' class="active" style="background: #4f4e4e"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/tcl_quiz.php">&nbsp &nbsp Quiz</a></li>
	</ul>

	<input type="checkbox" name="files" id="files">
	<label for="files">Files</label>
	<ul>
		<li><a href="<?php echo $path;?>pages/files/introduction.php">Introduction</a></li>
		<li><a href="<?php echo $path;?>pages/files/head.php">head</a></li>
		<li><a href="<?php echo $path;?>pages/files/tail.php">tail</a></li>
		<li><a href="<?php echo $path;?>pages/files/grep.php">grep</a></li>
		<li><a href="<?php echo $path;?>pages/files/find.php">find</a></li>
		<li><a href="<?php echo $path;?>pages/files/more.php">more</a></li>
		<li><a href="<?php echo $path;?>pages/files/zip.php">zip</a></li>
		<li><a href="<?php echo $path;?>pages/files/tar.php">tar</a></li>
		<li><a href="<?php echo $path;?>pages/files/locate.php">locate</a></li>
		<li><a href="<?php echo $path;?>pages/files/less.php">less</a></li>
		<li><a href="<?php echo $path;?>pages/files/cat.php">cat</a></li>
		<li><a href="<?php echo $path;?>pages/files/quiz.php">Quiz</a></li>
	</ul>

	<input type="checkbox" name="permissions" id="permissions">
	<label for="permissions">Permissions</label>
	<ul>
		<li><a href="<?php echo $path;?>pages/permissions/introduction.php">Introduction</a></li>
		<li><a href="<?php echo $path;?>pages/permissions/file_permissions.php">File Permissions</a></li>
		<li><a href="<?php echo $path;?>pages/permissions/chmod.php">chmod</a></li>
		<li><a href="<?php echo $path;?>pages/permissions/chown.php">chown</a></li>
		<li><a href="<?php echo $path;?>pages/permissions/groupdel.php">groupdel</a></li>
		<li><a href="<?php echo $path;?>pages/permissions/userdel.php">userdel</a></li>
		<li><a href="<?php echo $path;?>pages/permissions/groupadd.php">groupadd</a></li>
		<li><a href="<?php echo $path;?>pages/permissions/useradd.php">useradd</a></li>
		<li><a href="<?php echo $path;?>pages/permissions/quiz.php">Quiz</a></li>
	</ul>

	<input type="checkbox" name="system" id="system">
	<label for="system">System Information</label>
	<ul>
		<li><a href="<?php echo $path;?>pages/system/introduction.php">Introduction</a></li>
		<li><a href="<?php echo $path;?>pages/system/top.php">top</a></li>
		<li><a href="<?php echo $path;?>pages/system/w.php">w</a></li>
		<li><a href="<?php echo $path;?>pages/system/du.php">du</a></li>
		<li><a href="<?php echo $path;?>pages/system/ping.php">ping</a></li>
		<li><a href="<?php echo $path;?>pages/system/df.php">df</a></li>
		<li><a href="<?php echo $path;?>pages/system/ipconfig.php">ipconfig</a></li>
		<li><a href="<?php echo $path;?>pages/system/free.php">free</a></li>
		<li><a href="<?php echo $path;?>pages/system/quiz.php">Quiz</a></li>
	</ul>

	<input type="checkbox" name="netservices" id="netservices">
	<label for="netservices">Network Services</label>
	<ul>
		<li><a href="<?php echo $path;?>pages/netservices/introduction.php">Introduction</a></li>
		<li><a href="<?php echo $path;?>pages/netservices/scp.php">scp</a></li>
		<li><a href="<?php echo $path;?>pages/netservices/ssh.php">ssh</a></li>
		<li><a href="<?php echo $path;?>pages/netservices/http.php">http</a></li>
		<li><a href="<?php echo $path;?>pages/netservices/ftp.php">ftp</a></li>
		<li><a href="<?php echo $path;?>pages/netservices/netstat.php">netstat</a></li>
		<li><a href="<?php echo $path;?>pages/netservices/iptables.php">iptables</a></li>
		<li><a href="<?php echo $path;?>pages/netservices/nfs.php">nfs</a></li>
		<li><a href="<?php echo $path;?>pages/netservices/samba.php">samba</a></li>
		<li><a href="<?php echo $path;?>pages/netservices/quiz.php">Quiz</a></li>
	</ul>

	<input type="checkbox" name="distros" id="distros">
	<label for="distros"></label>
	<ul>
		<li><a href="<?php echo $path;?>pages/distros/introduction.php">Introduction</a></li>
		<li><a href="<?php echo $path;?>pages/distros/arch.php">Arch Linux</a></li>
		<li><a href="<?php echo $path;?>pages/distros/debian.php">Debian</a></li>
		<li><a href="<?php echo $path;?>pages/distros/slackware.php">Slackware</a></li>
		<li><a href="<?php echo $path;?>pages/distros/suse.php">Suse</a></li>
		<li><a href="<?php echo $path;?>pages/distros/gentoo.php">Gentoo</a></li>
		<li><a href="<?php echo $path;?>pages/distros/ubuntu.php">Ubuntu</a></li>
		<li><a href="<?php echo $path;?>pages/distros/fedora.php">Fedora</a></li>
		<li><a href="<?php echo $path;?>pages/distros/centos.php">CentOS</a></li>
		<li><a href="<?php echo $path;?>pages/distros/quiz.php">Quiz</a></li>
	</ul>
	<hr>
	<a href="<?php echo $path;?>pages/aboutAndContact.php">About Us &amp; Contact</a>
</nav>
<div id="openNav" onclick="openNavMobile();">&#9776;</div>

