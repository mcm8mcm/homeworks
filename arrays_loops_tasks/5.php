<?php
$f = __FILE__;
include 'common/title.php';

$arr = [ 'Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400' ];
foreach ($arr as $key=>$val){
	echo "<p><b>$key:</b> - зарплата $val</p>";
}
include 'common/footer.php';