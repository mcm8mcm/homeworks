<?php
$f = __FILE__;
include '../common/title.php';
?>

<?php 
	function getFileList(){
		$g_dir = __DIR__.DS."gallery".DS;
		$ext = ['*.jpg', '*.gif', '*.png', '*.bmp'];
		$res = [];
		foreach($ext as $curr_ext){
			$tmp = glob($g_dir.$curr_ext);
			foreach($tmp as $file){
				$res[] = $file;
			}
		}
		
		return $res;
	}
?>
<div class="row" style="margin-bottom: 75px">
	<div class="col-lg-offset-2">
		<div class="col-lg-10">
			<?php 
				$tmp = explode(DS, __DIR__);
				$dir = $tmp[count($tmp) - 1];
			?>
			<form id="dirname_form" class="well" method="post" enctype="multipart/form-data" action="<?=BASE_PATH.$dir.PD.'controller.php'?>">
				<div class="form-group">
					<label for="fl_pick">Файл картинки:</label>
					<span class="btn btn-default btn-file">
						<input type="file" id="fl_pick" name="fl_pick" multiple="" accept="image/jpeg,image/png,image/gifs,image/bmp" title="Вабрать файл" />
					</span>						
				</div>


				<input type="submit" form="dirname_form" class="btn btn-default" value="Выгрузить" />
			</form>

			<div class="form-group well">
				<label for="tab_files">Файлы на сервере:</label>
			
				<?php $files = getFileList(); if(count($files) != 0) {  ?>
					<table>
						<?php foreach($files as $file) { ?>
							<tr>
								<td style="margin: 15px;width: 70px; height: 70px"><img src="<?='6/gallery'.PD.basename($file)?>"></img></td>
								<td><?=basename($file)?></td>
							</tr>
						<?php } ?>
					</table>
				<?php } else {echo '<h3 id="tab_files">Отсутствуют</h3>'; } ?>
			</div>

			
			
		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>
