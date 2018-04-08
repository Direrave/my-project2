<?php

function gallery($path) {
    $list = scandir($path);
    $array = [];
    foreach($list as $file) {
        if($file != '.' && $file != '..'){
            array_push($array, $file);
         }
    }
    return $array;
}