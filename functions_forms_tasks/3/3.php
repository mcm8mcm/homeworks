<?php
$f = __FILE__;
include '../common/title.php';
?>
<div class="row">
	<div class="col-lg-offset-2">
		<div class="col-lg-10">
			<?php 
				$tmp = explode(DS, __DIR__);
				$dir = $tmp[count($tmp) - 1];
			?>
			<form id="t_file_form" class="well" method="post" enctype="multipart/form-data" action="<?=BASE_PATH.$dir.PD.'controller.php'?>">
				<div class="form-group">
					<label for="ch_file">Анализируемый текст:</label>
					<input id="ch_file" name="ch_file" type="file" placeholder="Файл для анализа"/>
				</div>

				<div class="form-group">
					<label for="length_restrict">Ограничение длинны удаляемого слова:</label>
					<input id="length_restrict" name="length_restrict" type="number" min="1" size="2" max="100" value="1"></input>
				</div>
				
				<input type="submit" form="t_file_form" value="Обработать" />			 
			</form>
		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>