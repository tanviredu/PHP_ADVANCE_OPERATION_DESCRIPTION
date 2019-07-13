<?php
	// file size
		$filename = "create_file.txt";
		echo filesize($filename);


		// show the file log information 
		echo "<br/>";
		echo strftime("%m/%d/%Y %H:%M",filemtime($filename)); 
		echo "<br/>";
		echo strftime("%m/%d/%Y %H:%M",filectime($filename));
		echo "<br/>";
		echo strftime("%m/%d/%Y %H:%M",fileatime($filename));
		echo "<br/>";

		touch($filename);

		echo '<hr/>';

		echo "<br/>";
		echo strftime("%m/%d/%Y %H:%M",filemtime($filename)); 
		echo "<br/>";
		echo strftime("%m/%d/%Y %H:%M",filectime($filename));
		echo "<br/>";
		echo strftime("%m/%d/%Y %H:%M",fileatime($filename));
		echo "<br/>";


		//path parts

		$path_parts = pathinfo(__FILE__);
		echo $path_parts['dirname']."<br/>";
		echo $path_parts['basename']."<br/>";
		echo $path_parts['filename']."<br/>";
		echo $path_parts['extension']."<br/>";

		echo getcwd()."<br />";
		echo __DIR__."<br />";;
		//mkdir('new',0777); // create a full directory will fulll permission
		// making a nested directory
		//mkdir('new/test/test2',0777,true);
		//chdir('new');
		echo __DIR__."<br />";
		echo getcwd()."<br />";

		// remove the directory
		//rmdir('test');

		$dir = ".";

		if(is_dir($dir)){
			if($dir_handle=opendir($dir)){
				while($filename = readdir($dir_handle)){
					echo "Filename: {$filename}"."<br/>";

				}
				// use rwinddir if you want to rewind

				closedir($dir_handle);
			}
		}
		echo "<hr/>";
		$dir = ".";
			// there is another method called scandir()
		$dir_array = scandir($dir);
		foreach ($dir_array as $dir) {
			echo $dir."<br/>";
		}



?>