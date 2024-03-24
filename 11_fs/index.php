<?php
// Magic constants
echo __DIR__. '<br>';
echo __FILE__. "<br>";
echo __LINE__. "<br>";


// Create directory

//mkdir('test');

// // Rename directory
// rename('test', 'test2');

// // Delete directory
// rmdir('test2');

// Read files and folders inside directory
// echo file_get_contents('lorem.txt'); 
// $files=scandir('../');
// echo "<pre>";
// echo var_dump($files). '<BR>';
// echo "</pre>";

// // file_get_contents, file_put_contents

// file_put_contents('simple.txt', 'hello, i will stop doing bad things on date(24-3-2024) ');

// // file_get_contents from URL
// $usersJson=  file_get_contents('https://jsonplaceholder.typicode.com/users');

// $users= json_decode($usersJson, true);

// echo "<pre>";
// echo var_dump($users). '<BR>';
// echo "</pre>";

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
echo file_exists('simple.txt'). '<BR>';

// is_dir

is_dir('11_fs'). '<BR>';
// filemtime
// filesize
// disk_free_space
// file

?>