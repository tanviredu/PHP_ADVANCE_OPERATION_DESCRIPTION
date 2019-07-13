<?php 
	////////////////////////////////////////////	
	// if the fopen dont find the file 
	// it will create mode
	// file access mode
	// r->read
	// w->write erase and start writing
	// a-> append file
	//x->write a new file but do not overrite do only 
	//r+ read and write
	//a+ append but also read and write
	/////////////////////////////////////////////

	///////////////////////////////////////////
	// line ending
    //t-> translate windowns ending
    //b-> just write what i say
    // b-> use for all of them
    ////////////////////////////////////////////

   	$file = 'filetest.txt';
    if($handle=fopen($file, 'w')){
    	fwrite($handle, 'abc');
    	fwrite($handle, '123');
    	$content = "my name is \n tanvir rahman ";
    	fwrite($handle, $content);
    	

    fclose($handle);
	}else{
		echo "could not open file for writing";
	}

	// shortcut method for openng writing and every thing

	#$filename = 'second.txt';
	$filename = 'filetest.txt';
	$content = "hello my name is tanvir rahman\n i am a php programmer \n
	also  a django programmer \n also a machine learning student"$file = 'filetest.txt';

	if($size=file_put_contents($filename, $content)){
		// it willl bydefault overwrite the content

		echo "A file with {$size} bytes has been created";
	}


?>