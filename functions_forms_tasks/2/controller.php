<?php 
	function getWordsRating($a){
		$matches = [];
		
		$matches = preg_split("/[\s,]+/", $a);
		$rating = ['','',''];
		foreach($matches as $word){
			foreach($rating as $key=>$elem){
				if(strlen($elem) < strlen($word)){
					$rating[$key] = $word;
					break;
				}
			}
		}
		
		return $rating;
	}
?>

<?php
$f = '2';
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
			<h3><?=count($res) == 0 ? 'Массив слов пуст' : 'Вот рейтинг 3-х самых длинных слов из списка:';?></h3>
			<?php if(count($res) != 0) { ?>
			<ul>
				<?php foreach($res as $word) { ?>
					<li><?=$word ;?></li>
				<?php } ?>
			</ul>
			<?php } ?>
			
			<a class="btn btn-primary" href="<?=BASE_PATH.$dir.PD.'2.php'?>">Вернуться</a>
		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>
