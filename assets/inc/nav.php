
<link rel="stylesheet" href="<?php echo $path?>assets/css/style.css">

<nav style="" id="menu">
<button onclick="menu_close()" class="exitButton">Close &times;</button>
<!--<link rel="stylesheet" href="../../assets/css/style.css">-->
  <!-- Source: http://thecodeplayer.com/experiment/vertical-accordion-menu-using-jquery-css3/3 -->

<div id="accordian">
		<ul>
				<li class="active">
						<h3><a href="#"><i class="fa fa-lg fa-tachometer"></i>Tips</a></h3>
						<ul>
                            <li><a href="<?php echo $path;?>index.php">How To Use This Site(Home)</a></li>
						</ul>
				</li>
				<li>
						<h3><a href="#"><i class="fa fa-lg fa-tasks"></i>The Command Line</a></h3>
						<ul>
								<li><a href="<?php echo $path;?>pages/TheCommandLine/introduction.php">Introduction</a></li>
								<li class="active">
										<a href="#">Commands</a>
										<ul>
												<li><a href="<?php echo $path;?>pages/TheCommandLine/ls.php">ls</a></li>
												<li><a href="<?php echo $path;?>pages/TheCommandLine/pwd.php">pwd</a></li>
                                                <li><a href="<?php echo $path;?>pages/TheCommandLine/rm.php">rm</a></li>
                                                <li><a href="<?php echo $path;?>pages/TheCommandLine/rmdir.php">rmdir</a></li>
                                                <li><a href="<?php echo $path;?>pages/TheCommandLine/cd.php">cd</a></li>
                                                <li><a href="<?php echo $path;?>pages/TheCommandLine/man.php">man</a></li>
                                                <li><a href="<?php echo $path;?>pages/TheCommandLine/mkdir.php">mkdir</a></li>
										</ul>
								</li>
								<li><a href="#">Quiz</a></li>
						</ul>
				</li>
				<li>
						<h3><a href="#"><i class="fa fa-lg fa-tasks"></i>Files</a></h3>
						<ul>
								<li><a href="#">Introduction</a></li>
								<li class="active">
										<a href="#">Commands</a>
										<ul>
												<li><a href="#">head</a></li>
												<li><a href="#">tail</a></li>
                                                <li><a href="#">grep</a></li>
                                                <li><a href="#">find</a></li>
                                                <li><a href="#">more</a></li>
                                                <li><a href="#">zip</a></li>
                                                <li><a href="#">tar</a></li>
                                                <li><a href="#">locate</a></li>
                                                <li><a href="#">less</a></li>
                                                <li><a href="#">cat</a></li>
                                                <li><a href="#">cat</a></li>
										</ul>
								</li>
								<li><a href="#">Quiz</a></li>
						</ul>
				</li>
                <li>
						<h3><a href="#"><i class="fa fa-lg fa-tasks"></i>Permissions</a></h3>
						<ul>
								<li><a href="#">Introduction</a></li>
								<li class="active">
										<a href="#">Commands</a>
										<ul>
												<li><a href="#">File Permissions</a></li>
												<li><a href="#">chmod</a></li>
                                                <li><a href="#">chown</a></li>
                                                <li><a href="#">groupdel</a></li>
                                                <li><a href="#">userdel</a></li>
                                                <li><a href="#">groupadd</a></li>
                                                <li><a href="#">useradd</a></li>
										</ul>
								</li>
								<li><a href="#">Quiz</a></li>
						</ul>
				</li>
                <li>
						<h3><a href="#"><i class="fa fa-lg fa-tasks"></i>System Information</a></h3>
						<ul>
								<li><a href="#">Introduction</a></li>
								<li class="active">
										<a href="#">Commands</a>
										<ul>
												<li><a href="#">top</a></li>
												<li><a href="#">w</a></li>
                                                <li><a href="#">du</a></li>
                                                <li><a href="#">ping</a></li>
                                                <li><a href="#">df</a></li>
                                                <li><a href="#">ip / ifconfig</a></li>
                                                <li><a href="#">free</a></li>
										</ul>
								</li>
								<li><a href="#">Quiz</a></li>
						</ul>
				</li>
                <li>
						<h3><a href="#"><i class="fa fa-lg fa-tasks"></i>Network Services</a></h3>
						<ul>
								<li><a href="#">Introduction</a></li>
								<li class="active">
										<a href="#">Commands</a>
										<ul>
												<li><a href="#">scp</a></li>
												<li><a href="#">ssh</a></li>
                                                <li><a href="#">sshd</a></li>
                                                <li><a href="#">http</a></li>
                                                <li><a href="#">ftp</a></li>
                                                <li><a href="#">ss / netstat</a></li>
                                                <li><a href="#">iptables</a></li>
                                                <li><a href="#">nfs</a></li>
                                                <li><a href="#">samba</a></li>
										</ul>
								</li>
								<li><a href="#">Quiz</a></li>
						</ul>
				</li>
                <li>
						<h3><a href="#"><i class="fa fa-lg fa-tasks"></i>Distribution Specific</a></h3>
						<ul>
								<li><a href="#">Introduction</a></li>
								<li class="active">
										<a href="#">Distros</a>
										<ul>
												<li><a href="#">Arch</a></li>
												<li><a href="#">Debian</a></li>
                                                <li><a href="#">Slackware</a></li>
                                                <li><a href="#">Suse</a></li>
                                                <li><a href="#">Gentoo</a></li>
                                                <li><a href="#">Ubuntu</a></li>
                                                <li><a href="#">Fedora</a></li>
                                                <li><a href="#">CentOS</a></li>
										</ul>
								</li>
								<li><a href="#">Quiz</a></li>
						</ul>
				</li>
            
		</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="../../assets/scripts/index.js"></script>

</nav>
<div class="burger">
  <button class="burger_Button" onclick="menu_open()">BUTTON</button>
</div>

