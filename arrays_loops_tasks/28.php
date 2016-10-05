<?php
$f = __FILE__;
$style =  '<link rel="stylesheet" href="./13/13.css">';
include 'common/title.php';
?>


<table>
<thead>
	<tr>
		<td colspan="5" align="center">
			<h2>Таблица умножения</h2>
		</td>
	<tr>	
</thead>

	<?php $row = 1; ?>
	<tr>
	<?php  for ($i = 1; $i<=10; $i++){ $coef = (($i - ($row == 2 ? 5 : 0)) + ($row == 2 ? 5 : 0));  ?>
	
	<td>	
		<?php			
			for($k = 1; $k <= 10; $k ++) {
				$res = $coef * $k;
				echo "<p> $coef X $k = $res </p>" . PHP_EOL;
			}
		?>	
	</td>
	<?php if($i == 5) {
		$row++;
		echo '</tr><tr>';
	} ?>			
	
	<?php } ?>		
</tr>
</table>

<?php
include 'common/footer.php';
?>