<?php
include '2.php';
$age_type=gettype($age);
if( ( $age_type !== 'integer' || $age_type !== 'double' ) || $age < 0){
	echo "Неизвестный возраст";
}