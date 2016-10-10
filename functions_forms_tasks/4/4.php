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
			<form id="dirname_form" class="well" method="post" enctype="multipart/form-data" action="<?=BASE_PATH.$dir.PD.'controller.php'?>">
				<div class="form-group">
					<label for="dir_name">Имя директории:</label>
					<input id="dir_name" name="dir_name" placeholder="Имя директории" class="form-control" value="../"></input>
				</div>
				<input type="submit" form="dirname_form" class="btn btn-default" value="Вывести содежимое директории" />			 
			</form>
		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>
