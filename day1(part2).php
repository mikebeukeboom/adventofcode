<?php
function calculateCaptcha($input)
{
    $split = strlen($input) / 2;
    $array = str_split($input);

    $count = 0;

    foreach ($array as $index => $item) {
        $array[] = $array[$index];
        if ($item === $array[$index + $split]) {
            $count = $count + $item;
        }
    }
    return $count;
}
$example1 = '1212'; //produces 6
$example2 = '1221'; //produces 0
$example3 = '123425';//produces 4
$example4 = '123123';//produces 12
$example5 = '12131415';//produces 4

echo calculateCaptcha($example1);
echo calculateCaptcha($example2);
echo calculateCaptcha($example3);
echo calculateCaptcha($example4);
echo calculateCaptcha($example5);