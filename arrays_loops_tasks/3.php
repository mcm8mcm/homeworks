<?php
$f = __FILE__;
include 'common/title.php';
$arr = [26, 17, 136, 12, 79, 15];
$result = 0;
$arr_str = '[';
foreach ($arr as $elem){
	$result += ($elem * $elem);
	$arr_str = $arr_str . "$elem ";
}
$arr_str = trim($arr_str) . ']'; ?>


<p id="source_arr"><label for="source_arr">Исходный массив эементов К: </label><?=$arr_str;?></p>

<p id="source_arr"><label for="summ">&Sigma; К<sup>2</sup> = </label><?=$result;?></p>

<?php 	
include 'common/footer.php';
?>