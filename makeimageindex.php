<?php

$files = scandir(getcwd()."/images");
$listtext = "";
foreach(array_reverse($files) as $value){
    if($value != "." && $value != ".."){
        $listtext .= $value.",";
    }
}
$file = fopen("list.txt","w");// create new file with this name
fwrite($file,$listtext); //write data to file
fclose($file);  //close file

?>