<?php 
	//open a file first

	$filename="create_file.txt";
	if($handle = fopen($filename, 'r')){
		// every character is one byte
		$content = fread($handle, 4); // fetch 4 character
		fclose($handle);
	}

	echo "<br/>";
//	echo $content;
//	echo "<br/>";
	echo nl2br($content); // it will show with line ending

	echo "<hr/>";
	// how to read the total number of the filr
	// load the total file

	$filename = 'create_file.txt';
	//open the file
	if($handle = fopen($filename, 'r')){
		$content = fread($handle, filesize($filename));
		fclose($handle);
	}

	echo nl2br($content);

	echo "<hr/>";



	// short cut file_get

		$content = file_get_contents($filename);

		echo nl2br($content);



		//getting just one line
	echo "<hr/>";

	$filename = 'create_file.txt';
	//open the file
	if($handle = fopen($filename, 'r')){
		$content = fgets($handle);
		fclose($handle);
	}

	echo nl2br($content);

	echo "<hr/>";






?>