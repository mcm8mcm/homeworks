<?php
$f = __FILE__;
$style =  '<link rel="stylesheet" href="6/6.css">';
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
	
	function getNewImageSize($imagePath) {
		list($w,$h,$type) = getimagesize($imagePath);
		$type = image_type_to_extension($type);
		$new_h = 300;
		$new_w = $new_h * ($w / $h);
		return [$new_h, $new_w];
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
						<input type="file" id="fl_pick" name="fl_pick[]" multiple accept="image/jpeg,image/png,image/gifs,image/bmp" title="Вабрать файл" />
					</span>						
				</div>


				<input type="submit" form="dirname_form" class="btn btn-default" value="Выгрузить" />
			</form>

			<div class="form-group well">
				<label for="tab_files">Файлы на сервере:</label>
			
				<?php $files = getFileList(); if(count($files) != 0) {  ?>
					<table >
						<?php foreach($files as $file) { ?>
							<?php
								$file_path = '6/gallery'. PD . basename($file);
								list($new_h, $new_w) = getNewImageSize($file);
							?>
							<tr>
								<td class="image">
									<div class="panel panel-default">
										<div class="panel-heading"><?=basename($file)?></div>
									
										<div class="panel-body" style="text-align: center">
											<img src="<?=$file_path?>" width="<?=$new_w;?>" height="<?=$new_h?>"></img>
										</div>
									</div>
								</td>
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
