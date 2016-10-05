<?php
$f = __FILE__;
include 'common/title.php';

$arr = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
$month = $arr[date('m')];

foreach ($arr as $mon){
	echo '<p>' . ($mon === $month ? '<b>' : '') . "$mon" . ($mon === $month ? '</b>' : '') . '</p>';
}

include 'common/footer.php';