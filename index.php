<?php

function countAppearedTime($arr,$number){
    $count = 0;
    foreach($arr as $value){
        if($value == $number){
             $count ++;
        }
    }
    return $count;
}

echo countAppearedTime([1,1,1,1,1,1,2,4,5,6,6],1);