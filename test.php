<?php

$str="10;1";
$bag = "10;1;10;3;11;2;18;2";
$pos = strpos($bag, $str);
$len = strlen($str);
$len2 = strlen($bag);
//8位 12345634 查找34
//pos=2 len=2
//substr(0,pos-1).substr(pos+len,len2-1)
//第0位则去掉前面的;
if($pos == 0)
    $new_bag = substr(0,$pos-1).substr($pos+$len,$len2-1);
else
    $new_bag = substr(1,$pos-1).substr($pos+$len,$len2-1);
echo $new_bag;


?>