<?php
$table = [
    ['Имя', 'Возраст', 'Город'],
    ['Алексей', 25, 'Москва'],
    ['Мария', 30, 'Санкт-Петербург'],
    ['Иван', 22, 'Казань'],
    ['Елена', 28, 'Екатеринбург']
];

echo "<table border='1'>";

foreach ($table as $row) {
    echo "<tr>"; 
    foreach ($row as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>"; 
    }
    echo "</tr>"; 
}

echo "</table>"; 
?>
