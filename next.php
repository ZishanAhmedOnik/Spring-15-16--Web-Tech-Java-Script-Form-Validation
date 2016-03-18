<?php
	

	echo 'NAME: ', $_REQUEST['name'], '<br/>';
	echo 'EMAIL: ', $_REQUEST['email'], '<br/>';
	echo 'GENDER: ', $_REQUEST['gender'], '<br/>';
	echo 'ADDRESS: ', $_REQUEST['address'], '<br/>';
	echo 'DEPARTMENT: ', $_REQUEST['dept'], '<br/>';
	
	echo 'HOBBIES: ';
	foreach ($_REQUEST['hobbies'] as $hobby) {
		echo $hobby, ', ';
	}
	echo '<br/>';

	echo 'USERNAME: ', $_REQUEST['username'], '<br/>';
	echo 'PASSWORD: ', $_REQUEST['password'], '<br/>';
	echo 'HIDDEN: ', $_REQUEST['hidden'], '<br/>';
?>