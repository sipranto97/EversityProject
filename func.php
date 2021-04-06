<?php
$hell = "hello world";


    $pos = strrpos($hell, ' ');
    $first = substr($hell, 0, $pos);
    echo $first;

?>