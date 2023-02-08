<?php
function getRandomNumbersArray() : array
{
    $nbTab = range(-10, 10);
    shuffle($nbTab);

    return $nbTab;
}

$unsortNumbers = getRandomNumbersArray();
var_dump ($unsortNumbers);


function sortNumbers(array $numbers, bool $desc=false){

    if ($desc === false){

        $max=$numbers[0];
        foreach($numbers as $number){
            if($number > $max){
                $max=$number;
            }
        }
        $length = count($numbers);
        for ($i=0; $i < $length; $i++){
            $min=$max;
            $keyToDelete;
            foreach ($numbers as $key => $number){
                if($number < $min){
                    $min=$number;
                    $keyToDelete=$key;
                }
            }
            $newTab[]=$min;
            unset($numbers[$keyToDelete]);
        }
            return $newTab;
    }

    else if ($desc === true){

        $min=$numbers[0];
        foreach($numbers as $number){
            if($number < $min){
                $min=$number;
            }
        }
        $length = count($numbers);
        for ($i=0; $i < $length; $i++){
            $max=$min;
            $keyToDelete;
            foreach ($numbers as $key => $number){
                if($number > $max){
                    $max=$number;
                    $keyToDelete=$key;
                }
            }
            $newTab[]=$max;
            unset($numbers[$keyToDelete]);
        }
            return $newTab;
    }
}

$sortNumbers = sortNumbers($unsortNumbers, true);
var_dump ($sortNumbers);

?>