<?php
function getyoutoubid($url){
    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
    return isset($match[1])?$match[1]:null;
}
function slug(string $name){
   return strtolower(trim(str_replace(' ','_',$name)));
}
