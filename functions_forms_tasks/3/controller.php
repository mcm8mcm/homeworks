<?php 
	function chText($a){
		$ru_pattern = '/([^а-яА-ЯЁёaa-zA-z]*)([а-яА-ЯЁёaa-zA-z]{' . (++$a) . ',})([^а-яА-ЯЁёaa-zA-z]*)/u';
		$file_name = key($_FILES);
		
		$content = file_get_contents($_FILES[$file_name]['tmp_name']);
		$res = [];
		$res['source'] = $content;
		$res['result'] = preg_replace($ru_pattern, '$1', $content);
		return $res;
	}
?>

<?php
$f = '3';
include '../common/title.php';
?>
<div class="row">
	<div class="col-lg-offset-2">
		<div class="col-lg-10">
			<?php 
				$tmp = explode(DS, __DIR__);
				$dir = $tmp[count($tmp) - 1];
			?>

			<h3><?=count($_FILES) == 0 ? 'Не выбран файл' : 'Результат работы программы:';?></h3>
			
			<?php if(count($_FILES)) { $result = chText(intval($_POST['length_restrict'])); } ?>
							
				<div class="well" style="margin-bottom: 100px">
					<div class="form-group">
						<label for="ch_file">Исходный текст:</label>
						<textarea disabled="1" rows="10"><?=$result['source']?></textarea>
					</div>
	
					<div class="form-group">
						<label for="length_restrict">Текст, из которого удалены слова количество символов в которых больше <?=$_POST['length_restrict']?></label>
						<textarea disabled="1" rows="10"><?=$result['result']?></textarea>
					</div>
					
					<a class="btn btn-primary" href="<?=BASE_PATH.$dir.PD.'3.php'?>">Вернуться</a>
				</div>
							
				
		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>
