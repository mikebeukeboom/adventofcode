<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 05/12/2017
 * Time: 17:18
 */
$content = file('input.txt');
$answer = 0;
foreach ($content as $row) {
    $row = str_replace("\n","", $row);
    $numberList = explode("\t", $row);
    $min = min($numberList);
    $max = max($numberList);
    $difference = (int)$max - (int)$min;
    $answer += $difference;
}
echo $answer; //43074