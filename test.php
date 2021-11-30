<?php

namespace App;

class Rating
{
    public function getStars(array $ratings): string
    {
        $star = "";
        $average = array_sum($ratings) / count($ratings);
        $average = round($average *2) / 2;
        
        for ($i = 1; $i <= $average; $i++) {
            $star .= "*";
        }
        if(strpos($average, '.')) {
            $star .= "c";
        }

        return $star;
        /*if ($average % 2 != 0) {
            for ($i = 1; $i <= $average; $i++) {
                $star .= "*";
            }
            $star .= "c";
        } else {
            for ($i = 1; $i <= $average; $i++) {
                $star .= "*";
            }
        }
        */
    }
}

        // $ratings = [2.4];
        // $average = array_sum($ratings)/count($ratings);
        // $average = round($average * 2) / 2;
        // echo $average;