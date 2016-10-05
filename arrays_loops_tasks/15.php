<?php
$f = __FILE__;
include 'common/title.php';

$count = 0;
$arr = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr as $elem){
	$count++;
}

echo "<h3>Исходный массив:</h3><p>[4, 2, 5, 19, 13, 0, 10]</p>";
echo "<h3>Колисество элементо при подсчете в цикле foreach :</h3><p>$count</p>";
echo "<h3>Функция count() возвращает :</h3><p>" . count($arr) . "</p>";

include 'common/footer.php';