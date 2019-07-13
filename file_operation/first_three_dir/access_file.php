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
    fclose($handle);
	}else{
		echo "could not open file for writing";
	}


?>