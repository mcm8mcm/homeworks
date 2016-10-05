<?php
$f = __FILE__;
include 'common/title.php';
$arr = [1, 20, 15, 17, 24, 35];
$result = 0;
$arr_str = '[';
foreach ($arr as $elem){
	$result += $elem;
	$arr_str = $arr_str . "$elem ";
}
$arr_str = trim($arr_str) . ']'; ?>

<label for="source_arr">Исходный массив: </label>
<p id="source_arr"><?=$arr_str;?></p>
<label for="summ">Сумма элементов: </label>
<p id="source_arr"><?=$result;?></p>

<?php 	
include 'common/footer.php';
?>