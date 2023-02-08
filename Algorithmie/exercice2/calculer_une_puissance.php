<?php

function puissance(int $number, int $puissance){
    $result = $number;
    for($i=0; $i<$puissance-1; $i++){
        $result=$result*$number;
    }
    return $result;
}

$result = puissance(4, 8);
echo $result;

?>