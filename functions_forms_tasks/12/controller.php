<?php 
	function getNewText($a){
		$sentences = preg_split('/\. |\./u', $a);
		$sentences_tmp = [];
		foreach($sentences as $sentence){
			if(empty($sentence)) continue;
			$sentences_tmp[] = $sentence;
		}
		$sentences = array_reverse($sentences_tmp);
		
		$res = implode(". ", $sentences) . '.';
		$res = trim($res);
		return $res;
	}
?>

<?php
$f = '12';
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
			<a class="btn btn-primary" href="<?=BASE_PATH.$dir.PD.'12.php'?>">Вернуться</a>
		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>
