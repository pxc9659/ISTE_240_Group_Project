<?php
	$title='PALTS : The Command Line';
	$path='../../';
	$nav='introduction';
	include($path.'assets/inc/head.php');
?>
<body onload="getOurImage()" onresize="getOurImage()">
<script>
function getOurImage() {
	res=window.innerWidth;
	doc=document.getElementById('centerImage');
	if(res < 450) {
		doc.src="https://i.imgur.com/oXTrCcS.png";
	}else if( (res>450) && (res<1025) ) {
		doc.src="https://i.imgur.com/20445Wi.png";
	}else if( res>1025 ) {
		doc.src="https://i.imgur.com/qVpyShk.png";
	}
}
</script>
	<main>
		<h2>Introduction</h2>
		<img alt="A blank terminal." id="centerImage" class="mainImage">
		<p>
			The command line is where it all happens in Linux.
			 Every Linux distribution contains the command line, and most likely everyone who uses Linux will use the command line.
			 You might be wondering how you’re going to navigate through a computer using just text!
			 I mean, isn’t that what the mouse and graphics were invented for?
			 In this module, you are going to learn about how to efficiently navigate the UNIX command line, and do common tasks you would do with a mouse using just your keyboard and a terminal window.
		 </p>
<?php
	include($path.'assets/inc/footer.php');
?>
