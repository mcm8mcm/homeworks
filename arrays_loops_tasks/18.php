<?php
function isHollyday($day){
	return $day === 'Суббота' || $day === 'Воскресенье';
}

$f = __FILE__;
include 'common/title.php';

$arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

foreach ($arr as $day){
	echo '<p>' . (isHollyday($day) ? '<b>' : '') . "$day" . (isHollyday($day) ? '</b>' : '') . '</p>';
}

include 'common/footer.php';