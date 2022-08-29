<?php
//echo dirname(__FILE__);

$file = 'trans1.txt';
if(file_exists($file))
{
    echo 'very good the file ['.$file.'] is found';
    file_put_contents($file,'test1');
}
else
{
    echo 'the file ['.$file.'] is not found';
    file_put_contents($file,'test1');
}