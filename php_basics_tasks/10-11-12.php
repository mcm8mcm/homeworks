<?php
include '9.php';
switch (true) {
	case in_array($day, range(1, 5)):
		echo "��� ������� ����";
		break;
	case in_array($day, [6, 7]):
		echo "��� �������� ����";
		break;	
	default:
		echo "����������� ����";
	break;
};
