<?php 
	function getCommonWords($a, $b){
		$matches1 = [];
		$matches2 = [];
		
		preg_match_all('/\w+/', $a, $matches1);
		preg_match_all('/\w+/', $b, $matches2);
			
		$common = array_intersect($matches1[0] , $matches2[0]);
		return $common;
	}
?>

<?php
$f = '1';
include '../common/title.php';
?>
<div class="row">
	<div class="col-lg-offset-2">
		<div class="col-lg-10">
			<?php 
				$tmp = explode(DS, __DIR__);
				$dir = $tmp[count($tmp) - 1];
			?>

		
			<?php $res = getCommonWords($_POST['first_t_area'], $_POST['second_t_area']); ?>
			<h3><?=count($res) == 0 ? 'Нет общих слов в полях 1 и 2' : 'Общими словами в полях 1 и 2 были:';?></h3>
			<?php if(count($res) != 0) { ?>
			<ul>
				<?php foreach($res as $word) { ?>
					<li><?=$word ;?></li>
				<?php } ?>
			</ul>
			<?php } ?>
			
			<a class="btn btn-primary" href="<?=BASE_PATH.$dir.PD.'1.php'?>">Вернуться</a>
		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>
