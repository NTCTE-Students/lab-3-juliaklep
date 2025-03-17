<?php
$numbers = [5, 3, 8, 1, 4, 2, 7, 6];

sort($numbers);
echo "Сортировка по возрастанию:\n";
print_r($numbers);

rsort($numbers);
echo "Сортировка по убыванию:\n";
print_r($numbers);
?>
