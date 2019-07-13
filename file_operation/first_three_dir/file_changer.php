<?php
	
	// how to see the permission of any other file

	echo fileowner('file_permission.php');
	echo "<br/>";


	// if we have posix install 
	$owner_id = fileowner('file_permission.php');
	$owner_array = posix_getpwuid($owner_id);
	echo $owner_array['name'];

	// change the owner

	//chmod('file_permission.php',0600);




	// find if the file is readable or writable
	

	echo "<br/>";
	echo is_readable('file_permission.php')? 'yes' : 'no';
	echo "<br/>";
	echo is_writable('file_permission.php')? 'yes' : 'no';

?>