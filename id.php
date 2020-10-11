<?php
$file = 'count.txt';

//get the number from the file
$uniq = file_get_contents($file);

//add +1
$id = $uniq + 1 ;

// add that new value to text file again for next use
file_put_contents($file, $id);

// your unique id ready
echo $id;
?>