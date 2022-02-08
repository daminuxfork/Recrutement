<?php

namespace App\Services;

class AlgorithmeService
{
    public function algoFirst(array $integers)
    {

        rsort($integers);
        $highestIntegers = [];
        for($i = 0; $i < 3; $i++){
            $highestIntegers[] = $integers[$i];
        }

        if (count($integers) < 3){
            return 'Invalid';
        }else {
            return $highestIntegers;
        }
    }

    public function algoSecond()
    {
        $array = [];
        for($i = 0; $i < 10; $i++ ){
            $array[] = $i;
        }

        return $array;
    }
}