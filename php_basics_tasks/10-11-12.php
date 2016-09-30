<?php
include '9.php';
switch (true) {
	case in_array($day, range(1, 5)):
		echo "Это рабочий день";
		break;
	case in_array($day, [6, 7]):
		echo "Это выходной день";
		break;	
	default:
		echo "Неизвестный день";
	break;
};
