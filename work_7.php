<?php
function splitStringToArray($inputString) {
    $wordsArray = explode(" ", $inputString);
    return $wordsArray;
}

$input = "Это пример строки с несколькими словами";
$result = splitStringToArray($input);

print_r($result);
?>
