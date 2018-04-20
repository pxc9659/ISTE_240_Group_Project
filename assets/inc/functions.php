<?php

	function getPageName($pageNamePassed) {
		// Define custom page names
		$page_names = array(

			'user_del_add' => 'useradd/userdel',
			'group_del_add' => 'groupadd/groupdel'

		);
		// Separate on _, our space replacement
		$pageNameEdit = explode('_', $pageNamePassed);
		// Check if introduction is in the array, because if it is formatting isn't really necessary.
		if (in_array('introduction', $pageNameEdit) || in_array('Introduction', $pageNameEdit)) {
			$pageNameString = 'Introduction';
		}

		// Check if custom page name is defined
		else if (array_key_exists($pageNamePassed, $page_names)) {
			$pageNameString = $page_names[$pageNamePassed];
		}

		// Occurs if introduction is not in the array
		else {
			// Add each of the words from the split array to the title string.
			$pageNameString = '';
			for ($i = 0; $i < count($pageNameEdit); $i++) {
				if (count($pageNameEdit) <= 1) {
					$pageNameString = $pageNameString.$pageNameEdit[intval($i)];
				}
				else {
					$pageNameString = $pageNameString.ucfirst($pageNameEdit[intval($i)]).' ';
				}				
			}
		}
		return $pageNameString;
	} // END getPageName()
?>