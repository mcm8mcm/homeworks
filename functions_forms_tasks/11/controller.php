<?php 
	function getNewText($a){
		$sentences = preg_split('/\. |\./u', $a);
		$counter = count($sentences);
		$sentences_u = [];
		foreach($sentences as $sentence){
			if(empty($sentence)) continue;
			$fl = substr($sentence, 0, 2);
			$fl = mb_convert_case($fl, MB_CASE_UPPER, "UTF-8");	
			$sentences_u[] = $fl . substr($sentence, 2);
		}
		
		
		$res = implode(". ", $sentences_u) . '.';
		$res = trim($res);
		return $res;
	}
?>

<?php
$f = '11';
include '../common/title.php';
?>
<div class="row">
	<div class="col-lg-offset-2">
		<div class="col-lg-10">
			<?php 
				$tmp = explode(DS, __DIR__);
				$dir = $tmp[count($tmp) - 1];
			?>

			<?php $res = getNewText($_POST['first_t_area']); ?>
			<h3><?='Результат форматирования:';?></h3>
			<p><?=$res?></p>			
			<a class="btn btn-primary" href="<?=BASE_PATH.$dir.PD.'11.php'?>">Вернуться</a>
		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>
