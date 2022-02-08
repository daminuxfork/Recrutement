<?php

namespace App\Services;

class AlgorithmeService
{
    public function algoFirst($integers)
    {
        $result = '';
        if (count($integers) < 3){
            $result = 'Invalid';
        }
    }

    public function algoSecond($integers)
    {
        $filteredArray = [];

        foreach($integers as $integer){
            if ($integer <= 10 ){
                $filteredArray[] = $integer;
            }
        }
        var_dump($filteredArray);
    }
}