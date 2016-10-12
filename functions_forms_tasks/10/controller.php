<?php 
	function getWordsRating($a){
		$words = explode(' ', $a);
		$res = [];
		foreach ($words as $word){
			$word = strtoupper(trim($word));
			if(!array_key_exists($word, $res)){
				$res[$word] = 1;
			}else {
				$res[$word] += 1;
			}
		}
		
		asort($res);
		return $res;
	}
?>

<?php
$f = '10';
include '../common/title.php';
?>
<div class="row">
	<div class="col-lg-offset-2">
		<div class="col-lg-10">
			<?php 
				$tmp = explode(DS, __DIR__);
				$dir = $tmp[count($tmp) - 1];
			?>

		
			<?php $res = getWordsRating($_POST['first_t_area']); ?>
			<h3><?=count($res) == 0 ? 'Массив слов пуст' : 'Вот рейтинг частоты появления слов:';?></h3>
			<?php if(count($res) != 0) { ?>
			<ul>
				<?php foreach($res as $word=>$count) { ?>
					<li><?=$word . ' -> ' . $count ;?></li>
				<?php } ?>
			</ul>
			<?php } ?>
			
			<a class="btn btn-primary" href="<?=BASE_PATH.$dir.PD.'10.php'?>">Вернуться</a>
		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>
