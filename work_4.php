<?php
$arrayWithDuplicates = array(1, 2, 2, 3, 4, 4, 5, 5, 5);

$arrayWithoutDuplicates = array_unique($arrayWithDuplicates);

print_r($arrayWithoutDuplicates);
?>

