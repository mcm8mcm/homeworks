<?php
$f = __FILE__;
include 'common/title.php';

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = [];
$ru = [];

foreach ($arr as $key=>$val){
	$en[] = $key;
	$ru[] = $val;
}

echo "<h2> Исходный массив: </h2>";
print_r($arr);
echo '<h2> Массив "en": </h2>';
print_r($en);
echo '<h2> Массив "ru": </h2>';
print_r($ru);


include 'common/footer.php';