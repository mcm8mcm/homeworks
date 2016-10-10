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
					<label for="wildcard">Директория поиска:</label>
					<input id="init_dir" name="init_dir" placeholder="Директория поиска" class="form-control" value="./"/>
				</div>
				
				<div class="form-group">
					<label for="wildcard">Искомое слово:</label>
					<input id="wildcard" name="wildcard" placeholder="Искомое слово" class="form-control" value="*"/>
				</div>
				<input type="submit" form="dirname_form" class="btn btn-default" value="Искать" />			 
			</form>
		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>
