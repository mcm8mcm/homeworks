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
			<form id="t_aria_form" class="well" method="post" enctype="multipart/form-data" action="<?=BASE_PATH.$dir.PD.'controller.php'?>">
				<div class="form-group">
					<label for="first_t_area">Анализируемый текст:</label>
					<textarea id="first_t_area" name="first_t_area" rows="3" cols="3" placeholder="Текст для форматирования"></textarea>
				</div>
				<input type="submit" form="t_aria_form" value="Обработать" />			 
			</form>
		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>
