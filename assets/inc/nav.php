<nav id="navDiv" class="sideNav">
	<a href="#" class="closeButton" onclick="closeNavMobile();">&times;</a>
	<a href="<?php echo $path;?>" <?php if(isset($nav) && $nav=='home'){echo ' class="active"';}?>>Home</a>
	<hr>
	<input type="checkbox" name="tcl" id="tcl">
	<label for="tcl">The Command Line</label>
	<ul>
		<li<?php if(isset($nav) && $nav=='tcl_introduction'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/tcl_introduction.php">&nbsp; &nbsp; Introduction</a></li>
		<li<?php if(isset($nav) && $nav=='ls'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/ls.php">&nbsp; &nbsp; ls</a></li>
		<li<?php if(isset($nav) && $nav=='pwd'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/pwd.php">&nbsp; &nbsp; pwd</a></li>
		<li<?php if(isset($nav) && $nav=='rm'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/rm.php">&nbsp; &nbsp; rm</a></li>
		<li<?php if(isset($nav) && $nav=='cd'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/cd.php">&nbsp; &nbsp; cd</a></li>
		<li<?php if(isset($nav) && $nav=='man'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/man.php">&nbsp; &nbsp; man</a></li>
		<li<?php if(isset($nav) && $nav=='mkdir'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/mkdir.php">&nbsp; &nbsp; mkdir</a></li>
		<li<?php if(isset($nav) && $nav=='rmdir'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/rmdir.php">&nbsp; &nbsp; rmdir</a></li>
		<li<?php if(isset($nav) && $nav=='tcl_quiz'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/TheCommandLine/tcl_quiz.php">&nbsp; &nbsp; Quiz</a></li>
	</ul>

	<input type="checkbox" name="files" id="files">
	<label for="files">Files</label>
	<ul>
		<li<?php if(isset($nav) && $nav=='files_introduction'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/files/files_introduction.php">Introduction</a></li>
		<li<?php if(isset($nav) && $nav=='head'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/files/head.php">head</a></li>
		<li<?php if(isset($nav) && $nav=='tail'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/files/tail.php">tail</a></li>
		<li<?php if(isset($nav) && $nav=='grep'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/files/grep.php">grep</a></li>
		<li<?php if(isset($nav) && $nav=='find'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/files/find.php">find</a></li>
		<li<?php if(isset($nav) && $nav=='more'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/files/more.php">more</a></li>
		<li<?php if(isset($nav) && $nav=='zip'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/files/zip.php">zip</a></li>
		<li<?php if(isset($nav) && $nav=='tar'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/files/tar.php">tar</a></li>
		<li<?php if(isset($nav) && $nav=='locate'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/files/locate.php">locate</a></li>
		<li<?php if(isset($nav) && $nav=='less'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/files/less.php">less</a></li>
		<li<?php if(isset($nav) && $nav=='cat'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/files/cat.php">cat</a></li>
		<li<?php if(isset($nav) && $nav=='files_quiz'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/files/files_quiz.php">Quiz</a></li>
	</ul>

	<input type="checkbox" name="permissions" id="permissions">
	<label for="permissions">Permissions</label>
	<ul>
		<li<?php if(isset($nav) && $nav=='permissions_introduction'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/permissions/permissions_introduction.php">Introduction</a></li>
		<li<?php if(isset($nav) && $nav=='file_permissions'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/permissions/file_permissions.php">File Permissions</a></li>
		<li<?php if(isset($nav) && $nav=='chmod'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/permissions/chmod.php">chmod</a></li>
		<li<?php if(isset($nav) && $nav=='chown'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/permissions/chown.php">chown</a></li>
		<li<?php if(isset($nav) && $nav=='group_del_add'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/permissions/group_del_add.php">groupadd/groupdel</a></li>
		<li<?php if(isset($nav) && $nav=='user_del_add'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/permissions/user_del_add.php">useradd/userdel</a></li>
		<li<?php if(isset($nav) && $nav=='permissions_quiz'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/permissions/permissions_quiz.php">Quiz</a></li>
	</ul>

	<input type="checkbox" name="system" id="system">
	<label for="system">System Information</label>
	<ul>
		<li<?php if(isset($nav) && $nav=='system_introduction'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/SystemInformation/system_introduction.php">Introduction</a></li>
		<li<?php if(isset($nav) && $nav=='top'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/SystemInformation/top.php">top</a></li>
		<li<?php if(isset($nav) && $nav=='w'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/SystemInformation/w.php">w</a></li>
		<li<?php if(isset($nav) && $nav=='du'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/SystemInformation/du.php">du</a></li>
		<li<?php if(isset($nav) && $nav=='ping'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/SystemInformation/ping.php">ping</a></li>
		<li<?php if(isset($nav) && $nav=='df'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/SystemInformation/df.php">df</a></li>
		<li<?php if(isset($nav) && $nav=='ifconfig'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/SystemInformation/ifconfig.php">ifconfig</a></li>
		<li<?php if(isset($nav) && $nav=='free'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/SystemInformation/free.php">free</a></li>
		<li<?php if(isset($nav) && $nav=='system_quiz'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/SystemInformation/system_quiz.php">Quiz</a></li>
	</ul>

	<input type="checkbox" name="netservices" id="netservices">
	<label for="netservices">Network Services</label>
	<ul>
		<li<?php if(isset($nav) && $nav=='netservices_introduction'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/netservices/netservices_introduction.php">Introduction</a></li>
		<li<?php if(isset($nav) && $nav=='scp'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/netservices/scp.php">scp</a></li>
		<li<?php if(isset($nav) && $nav=='ssh'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/netservices/ssh.php">ssh</a></li>
		<li<?php if(isset($nav) && $nav=='wget'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/netservices/wget.php">wget</a></li>
		<li<?php if(isset($nav) && $nav=='ftp'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/netservices/ftp.php">ftp</a></li>
		<li<?php if(isset($nav) && $nav=='netstat'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/netservices/netstat.php">netstat</a></li>
		<li<?php if(isset($nav) && $nav=='iptables'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/netservices/iptables.php">iptables</a></li>
		<li<?php if(isset($nav) && $nav=='nfs'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/netservices/nfs.php">nfs</a></li>
		<li<?php if(isset($nav) && $nav=='samba'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/netservices/samba.php">samba</a></li>
		<li<?php if(isset($nav) && $nav=='netservices_quiz'){echo ' class="active"';}?>><a href="<?php echo $path;?>pages/netservices/netservices_quiz.php">Quiz</a></li>
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
	<a href="<?php echo $path;?>pages/aboutAndContact.php" <?php if(isset($nav) && $nav=='aboutAndContact'){echo 'class="active"';}?>>About Us &amp; Contact</a>
</nav>
<div id="openNav" onclick="openNavMobile();">&#9776;</div>
