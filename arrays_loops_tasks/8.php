<?php
$f = __FILE__;
include 'common/title.php';
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

echo "<h3>Исходный массив: </h3> [1, 2, 3, 4, 5, 6, 7, 8, 9]<br>";
echo "<h3>Конечная строка: </h3><br>";
echo implode('', $arr);
include 'common/footer.php';