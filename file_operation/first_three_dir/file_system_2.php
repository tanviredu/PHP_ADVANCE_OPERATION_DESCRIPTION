<?php
echo __DIR__ ."<br/>";
echo __FILE__ ."<br/>";
echo dirname(__FILE__)."<br/>";
echo file_exists(__FILE__)? 'yes':'no';
echo '<br/>';
echo file_exists(__DIR__)? 'yes': 'no';
echo '<br/>';
echo is_dir(__FILE__)? 'yes':'no';
echo '<br/>';
echo is_file(__FILE__) ? 'yes': 'no';
echo '<br/>';
echo is_dir(__FILE__)? 'yes': 'no';
echo '<br/>';
echo is_file(__DIR__) ? 'yes': 'no';
echo '<br/>';
echo file_exists((__DIR__)."/basic.html")? 'yes': 'no';

echo '<br/>';
echo file_exists((__DIR__)."/basi.html")? 'yes': 'no';

echo '<br/>';
echo file_exists((__DIR__)."/basic.html")? 'yes': 'no';
?>
