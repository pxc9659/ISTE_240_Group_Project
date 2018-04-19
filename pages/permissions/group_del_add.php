<?php
	
	$pageName = basename(__FILE__, '.php');

	$path = '../../';
	$nav = $pageName;

	require($path.'assets/inc/functions.php');

	$title = 'PALTS : '.getPageName($pageName);
	require($path.'assets/inc/head.php');
	require($path.'../../groupconn.php');

?>
<?php

	$result = $conn->query('SELECT * FROM Pages WHERE PageName = \''.$pageName.'\'');

	while ($resultArr = $result->fetch_assoc()) {

		$pageNameString = getPageName($pageName);

		echo '<hr><h2>'.$resultArr['PageParent'].': '.$pageNameString.'</h2><hr>';

		echo $resultArr['Content'];
	}


?>

<?php
	include($path.'assets/inc/footer.php');
?>