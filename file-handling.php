<?php

 echo readfile("webdictionary.txt");

 echo "<br>";
 echo "<br>";

// PHP File open/read

// PHP Open File - fopen()

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);

echo"<br>";

$myfile = fopen("testfile.txt", "w");