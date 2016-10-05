<?php
$f = __FILE__;
include 'common/title.php';

$count = rand(10, 20);
$arr = [];
$curr_nom = 0;
$curr_index = 0;


for($i=0; $i<$count; $i++){
	$arr[] = rand(1, 100);
}

$mul_even = 1; // 2
$mul_odd_elem = []; // NOT 2


foreach ($arr as $key=>$val){
	if($key % 2 == 0 && $val > 0){
		$mul_even *= $val;
	}
	
	if($key % 2 != 0 && $val > 0){
		$mul_odd_elem[] = $val;
	}
	
}

echo "<h3>Исходный массив: </h3><p>[" . implode(" , ", $arr) . "]</p>";
echo "<h3>Произведение тех элементов, которые больше ноля и у которых парные индексы = </h3><p>$mul_even</p>";
echo "<h3>Элементы, которые больше ноля и у которых не парный индекс = </h3><p>[" . implode(" , ", $mul_odd_elem) . "]</p>";

include 'common/footer.php';