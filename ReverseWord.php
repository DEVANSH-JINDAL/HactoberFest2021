<?php
function reverseWord(string $input)
{
    $lenStr = strlen($input);
    $arrayStr = str_split($input);

    $resultArray = [];

    for ($i = $lenStr - 1; $i >= 0; $i--) {
        array_push($resultArray, $arrayStr[$i]);
    }

    $joinArray = join("", $resultArray);
    echo ucfirst($joinArray) . PHP_EOL;
}
reverseWord("hello");
