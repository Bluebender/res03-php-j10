<?php

function division(int $number1, int $number2){
    $count=0;
    $result=$number1;
    while ($result>$number2){
        $result=$result-$number2;
        $count=$count+1;
    }
    return $count;
}

$result = division(10, 4);
echo $result;