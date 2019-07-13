
<?php
	// first create the file
	$file = "create_file.txt";
	if($handle = fopen($file, 'w')){
		fwrite($handle, "123\n456\n789\nwertyuioplkjjh");

		$pos = ftell($handle);
		fseek($handle, $pos-6); // move the cursor 6 backk
		rewind($handle);
		fwrite($handle, "12345678910");

		fclose($handle);

		//if you go like for the a+ you cant move the pointer
	}
?>

