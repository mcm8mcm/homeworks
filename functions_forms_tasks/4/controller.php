<?php 
	function getDirList($directory){
		$res = scandir($directory);
		return $res;
	}
?>

<?php
$f = '4';
include '../common/title.php';
?>
<div class="row">
	<div class="col-lg-offset-2">
		<div class="col-lg-10">
			<?php 
				$tmp = explode(DS, __DIR__);
				$dir = $tmp[count($tmp) - 1];
				$dir_name = $_POST['dir_name'];
			?>

			<?php if(!is_dir($dir_name)) {
				echo 'Директория не найдена.';
			}else{
				$dir_list = getDirList($dir_name);
				echo "<h3>Список файлов директории $dir_name: </h3>";
			} ?>
			
			<?php if(isset($dir_list)) { ?>
			<ul>
				<?php foreach($dir_list as $file_name) { ?>
					<li><?=is_dir($dir_name . $file_name) ? '<span class="fa fa-folder" style="color:#0077B5;"></span>' : '';?> <?=$file_name ;?></li>
				<?php } ?>
			</ul>
			<?php } ?>
			
			<a class="btn btn-primary" href="<?=BASE_PATH.$dir.PD.'4.php'?>">Вернуться</a>
		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>
