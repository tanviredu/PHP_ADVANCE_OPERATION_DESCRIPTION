<?php

    //basic of file management in php
    
    echo __FILE__." <br />";    // show the location of the file
    echo __LINE__."<br />";   
    echo dirname(__FILE__)."<br />"; // show the directory of that file
    echo __DIR__;    // show directory
    echo file_exists(__FILE__)?  'yes' : 'no'; // file axists or not

    echo file_exists(dirname(__FILE__)."/basic.html")? 'yes' : 'no';
    
    //find if it is a file or folder
    //
    echo is_file(dirname(__FILE__)) ? 'yes it is a file':'no it is not a file';
    echo is_file(dirname(__FILE__)) ? 'yes it is a file': 'no it is not a file';
    echo is_file(__FILE__) ? 'yes it is a file' : 'no it is not a file';

    echo is_dir(__FILE__) ? 'yes it is a dir' : 'no it is not a dir';

    echo is_dir(__DIR__) ? 'yes it is a dir' : 'no it is not a dir';



?>
