<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 05/12/2017
 * Time: 17:18
 */

$content = file('input.txt');
$i = 0;
$answer = 0;
$count = array();
foreach ($content as $row) {
    $row = str_replace("\n","", $row);
    $count[$i] = explode("	", $row);
    $i++;
}

foreach ($count as $number){
    $min = min($number);
    $max = max($number);
    $difference = (int)$max - (int)$min;
    $answer += $difference;
}
echo $answer;
