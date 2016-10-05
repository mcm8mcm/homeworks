<?php
$f = __FILE__;
include 'common/title.php';
$arr = [2, 5, 9, 15, 0, 4];
echo "<h2>Исходный массив: </h2> [2, 5, 9, 15, 0, 4] <br>";
echo "<h2>Индексы элементов, больше 3-х и меньше 10 (индекс первого элемента = 0):</h2><br>";
foreach ($arr as $key=>$val){
	if($val > 3 && $val < 10){
		echo "<p>$key (=$val)</p>";
	}
}
include 'common/footer.php';