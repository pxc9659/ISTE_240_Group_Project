<?php

	function getPageName($pageNamePassed) {
		$pageNameEdit = explode('_', $pageNamePassed);
		// Check if introduction is in the array, because if it is formatting isn't really necessary.
		if (in_array('introduction', $pageNameEdit) || in_array('Introduction', $pageNameEdit)) {
			$pageNameString = 'Introduction';
		}

		// Occurs if introduction is not in the array
		else {
			// Add each of the words from the split array to the title string.
			$pageNameString = '';
			for ($i = 0; $i < count($pageNameEdit); $i++) {
				$pageNameString = $pageNameString.$pageNameEdit[intval($i)].' ';
			}
		}

		return $pageNameString;

	} // END getPageName()

?>