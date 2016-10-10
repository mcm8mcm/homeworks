<?php 
	function getDirList($init_dir, $wildcard){
		$dir = opendir($init_dir);
		$res = [];
		while (false !== ($entry = readdir($dir))) {
			if(fnmatch($wildcard, $entry)){
				$res[] = $entry;
			}
		}	
		
		closedir($dir);		
		return $res;
	}
?>

<?php
$f = '5';
include '../common/title.php';
?>
<div class="row">
	<div class="col-lg-offset-2">
		<div class="col-lg-10">
			<?php 
				$tmp = explode(DS, __DIR__);
				$dir = $tmp[count($tmp) - 1];
				$wildcard = $_POST['wildcard'];
				$init_dir = $_POST['init_dir'];
				if(is_dir($init_dir)){
					$files = getDirList($init_dir, $wildcard);
				}
				
			?>

			<?php if(!is_dir($init_dir)) {
				echo "<h3>Не найден начальнй каталог.</h3>";
			}else{
				if(!isset($files) || count($files) == 0){
					echo "<h3>В выбранном каталоге не найдены файлы по запросу: '$wildcard'</h3>";
				}else{
				echo "<h3>Список каталогов и файлов по запросу '$wildcard': </h3>";
			} } ?>
			
			<?php if(is_dir($init_dir) && isset($files)) { ?>
			<ul>
				<?php foreach($files as $file_name) { ?>
					<li><?=is_dir($file_name) ? '<span class="fa fa-folder" style="color:#0077B5;"></span>' : '';?> <?=$file_name ;?></li>
				<?php } ?>
			</ul>
			<?php } ?>
			
			<a class="btn btn-primary" href="<?=BASE_PATH.$dir.PD.'5.php'?>">Вернуться</a>
		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>
