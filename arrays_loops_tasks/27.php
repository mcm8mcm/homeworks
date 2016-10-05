<?php
$f = __FILE__;
$style =  '<link rel="stylesheet" href="./13/13.css">';;
include 'common/title.php';

$rows = rand(5, 20);
$cols = rand(5, 10);

$colors = ['#FF0000', '#FFA500', '#FFFF00', '#008000', '#0000FF', '#800080', '#DA70DF', '#FF69B4', '#5C4033', '#FFFFF0', '#000000'];
?>

<table>
<?php 

for($row=1; $row<$rows; $row++){
	echo '<tr>' . PHP_EOL;
	for($col=1; $col<$rows; $col++){
		$num = rand(100, 10000);
		$color = $colors[rand(0, 10)];
		echo '<td style="'. 'width:0%;background-color:' . $color . '">' . PHP_EOL . '<span style="color:' . $color . ';-webkit-filter: invert(100%);filter: invert(100%);">' . "$num</span>" . PHP_EOL . '</td>' . PHP_EOL;
	}
	echo '</tr>' . PHP_EOL;
}
?>
</table>

<?php
include 'common/footer.php';
?>