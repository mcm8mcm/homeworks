<?php
$f = __FILE__;
include 'common/title.php';

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$keys = '';
$vals = '';
?>

<h3>Исходный массив выглядит так:</h3>
<p>('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой')</p>
<h3>Это - его ключи:</h3>
<?php 
foreach ($arr as $key=>$val){
	echo "<p> $key </p>";
}		
?>
<h3>А это - его значения:</h3>
<?php 
foreach ($arr as $key=>$val){
	echo "<p> $val </p>";
}	
include 'common/footer.php';
?>


