<?php
$f = __FILE__;
include 'common/title.php';

$arr = [4, 2, 5, 19, 13, 0, 10];
$filter = ['a',2, 3, 4];
$res = [];

foreach ($arr as $key=>$val){
	if(array_search($val, $filter) != false){
		$res[] = $key;
	}
}

echo "<h3>Исходный массив: </h3><p>[4, 2, 5, 19, 13, 0, 10]</p>";
echo "<h3>Искомые значения найдены в позициях: </h3><br/> " . implode(" , ", $res);

include 'common/footer.php';