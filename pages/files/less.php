<!-- Head PHP Block -->
<?php
	// Get the page name from the file name
	$pageName = basename(__FILE__, '.php');
	$path='../../';
	$nav=$pageName;
	require($path.'assets/inc/functions.php'); // The file that contains global functions
	$title='PALTS : '.getPageName($pageName);
	require($path.'assets/inc/head.php');
	require($path.'../../groupconn.php');

	// Get page data
	$resultArr = $conn->query('SELECT * FROM Pages WHERE PageName = \''.$pageName.'\'')->fetch_assoc();

	// Assign next and previous pages
	$prev = $resultArr['PrevPage'];
	$next = $resultArr['NextPage'];

?>
<!-- Content PHP Block -->
<?php
	// Read in page data and echo to the webpage
	$pageNameString = getPageName($pageName);
	echo '<hr><h2>'.$resultArr['PageParent'].': '.$pageNameString.'</h2><hr>';
	echo $resultArr['Content'];
?>
<!-- Footer PHP Block -->
<?php
	include($path.'assets/inc/footer.php');
?>
