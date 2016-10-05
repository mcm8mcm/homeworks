<?php
$f = __FILE__;
include 'common/title.php';

$count = rand(20, 40);
$arr = [];
$min = PHP_INT_MAX;
$max = 0;
$curr_nom = 0;

for($i=0; $i<$count; $i++){
	$curr_nom = rand(0, 10000);
	$arr[] = $curr_nom;
	$min = min($min, $curr_nom);
	$max = max($max, $curr_nom);
}

echo "<h3>Исходный массив: </h3><p>[" . implode(" , ", $arr) . "]</p>";
echo "<h3>Минимальное значение = <h3><p>$min</p>";
echo "<h3>Максимальное значение = <h3><p>$max</p>";

include 'common/footer.php';