<?php
function isHollyday($day){
	return $day === 'Суббота' || $day === 'Воскресенье';
}

$f = __FILE__;
include 'common/title.php';

$arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
$tmp_day = intval(date('w'));
$tmp_day = $tmp_day == 0 ? 6 : $tmp_day - 1; 
$day = $arr[$tmp_day]; 

foreach ($arr as $curr_day){
	echo '<p>' . (isHollyday($curr_day) ? '<b>' : '') . ($curr_day === $day ? '<i>' : '') . "$curr_day". ($curr_day === $day ? '</i>' : '') . (isHollyday($curr_day) ? '</b>' : '') . '</p>';
}

include 'common/footer.php';