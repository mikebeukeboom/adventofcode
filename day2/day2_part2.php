<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 06/12/2017
 * Time: 00:38
 */
$content = file('input.txt');
$answer = 0;
$i = 0;
foreach ($content as $row) {
    $row = str_replace("\n", "", $row);
    $numberList[$i] = explode("\t", $row);
    $min = min($numberList);
    $max = max($numberList);
    $difference = (int)$max - (int)$min;
    $answer += $difference;
    $i++;
}
$answerPart2 = 0;

foreach ($numberList as $row) {
    $dodaloop = false;
    $count = count($row) - 1;
    $i = 0;
    $j = 0;
    rsort($row);

    while ($dodaloop === false) {
        if (($row[$i] % $row[$j +1]) == 0) {
            if ($row[$i] / $row[$j + 1] != 1) {
                $answer = $row[$i] / $row [$j + 1];
                echo $row[$i] . " / " . $row[$j + 1] . " =" . $answer . " <br />";
                $dodaloop = true;
                $answerPart2 += $answer;
            }
        }
        $j++;
        if ($j === 15) {
            $i++;
            $j = 0;
        }
    }
}
echo $answerPart2;//280