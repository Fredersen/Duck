<?php

function getScore(array $seriesDeQuilles)
    {
        // $result = 0;
        // $arrayLenght = count($seriesDeQuilles);

        // for ($key = 0; $arrayLenght - 2; $key++) {
        //     if (empty($seriesDeQuilles[$key]) && empty($seriesDeQuilles[$key + 1]) && empty($seriesDeQuilles[$key + 2])) {
        //         return "Lost";
        //     }
        // }
        // foreach ($seriesDeQuilles as $key => $value) {
        //     if (count($value) === 1) {
        //         $result += $value;
        //     } else if (count($value) > 1) {
        //         $result += count($value);
        //     }
        // }
        // if ($result > 50) {
        //     $result === 25;
        // }
        // if ($result == 50) {
        //     return "Win";
        // }

        // return $result;
    }

$seriesDeQuilles =  [];
$seriesDeQuilles = [[4,5], [4], [6,3]];

function test($seriesDeQuilles){

if(count($seriesDeQuilles) >= 3){
for ($key = 0; count($seriesDeQuilles) - 2; $key++) {
    if ((count($seriesDeQuilles[$key]) == 0 && count($seriesDeQuilles[$key + 1]) == 0 && count($seriesDeQuilles[$key + 2])) == 0) {
        return "Lost";
    }
}
}

}

echo test($seriesDeQuilles);
echo count($seriesDeQuilles[0]);
