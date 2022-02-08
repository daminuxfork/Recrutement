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

        $longueur = strlen('TROPFACILE');

        for ($i = ($longueur - $longueur); $i <= $longueur; $i++)
            $resultat[$i] = $i;

        return $resultat;
    }
}
