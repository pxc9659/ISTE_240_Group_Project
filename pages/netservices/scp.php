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
?>
<!-- Content PHP Block -->
<?php
	// Get page data
	$result = $conn->query('SELECT * FROM Pages WHERE PageName = \''.$pageName.'\'');
	// Read in page data and echo to the webpage
	while ($resultArr = $result->fetch_assoc()) {
		$pageNameString = getPageName($pageName);
		echo '<hr><h2>'.$resultArr['PageParent'].': '.$pageNameString.'</h2><hr>';
		echo $resultArr['Content'];
	}

?>
<!-- Footer PHP Block -->
<?php
	include($path.'assets/inc/footer.php');
?>
