<?php


$file = fopen('yash.txt','w');
$text = "Hi , I am Yash Chowdhari, Roll no : A010 from Batch B1 & currently pursuing MCA from MPSTME";
fwrite($file,$text);



if(file_exists("yash.txt")){
    $filee = fopen('yash.txt','r');
    echo "content of file is : <b>". fread($filee,filesize('yash.txt')) . "</b>";
}


