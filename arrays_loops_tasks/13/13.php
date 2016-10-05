<?php
$f = __FILE__;
$style =  '<link rel="stylesheet" href="13.css">';
include '../common/title.php';
?>


<table>
<thead>
	<tr>
		<td colspan="5" align="center">
			<h2>Таблица умножения</h2>
		</td>
	<tr>	
</thead>


<?php for($row = 1; $row<=2; $row++) { ?> 
	<tr>
		<?php  for ($i = 1; $i<=5; $i++){ $coef = ($i + ($row == 2 ? 5 : 0));  ?>
			<td>
				<?php for($k=1; $k<=10; $k++) {  
					$res = $coef * $k;
					echo "<p> $coef X $k = $res </p>" . PHP_EOL;
				} ?>				
			</td>	
		<?php } ?>		
	</tr>
<?php } ?>

</table>

<?php
include '../common/footer.php';
?>