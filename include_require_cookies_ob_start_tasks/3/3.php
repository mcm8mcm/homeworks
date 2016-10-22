<?php
ob_start();
$f = __FILE__;
$style =  '<link rel="stylesheet" href="1/1.css">';
include '../common/title.php';

$fav_from_cookie = isset($_COOKIE['fav_color']) ? $_COOKIE['fav_color'] : "";
$colors=[];
$colors[] = array('hex_color' => '#000', 'name'=>'Черный');
$colors[] = array('hex_color' => '#FF0000', 'name'=>'Красный');
$colors[] = array('hex_color' => '#FF7F00', 'name'=>'Ораньжевый');
$colors[] = array('hex_color' => '#FFFF00', 'name'=>'Желтый');
$colors[] = array('hex_color' => '#00FF00', 'name'=>'Зеленый');
$colors[] = array('hex_color' => '#0000FF', 'name'=>'Голубой');
$colors[] = array('hex_color' => '#6600FF', 'name'=>'Синий');
$colors[] = array('hex_color' => '#8B00FF', 'name'=>'Фиолетовый');

if(isset($_POST['fav_color'])){
	$fav_from_cookie = $_POST['fav_color'];
	setcookie('fav_color', $fav_from_cookie);
}

$fav_color = empty($fav_from_cookie) ? "" : $colors[intval($fav_from_cookie) - 1]['hex_color'];

ob_end_flush();
?>

<div class="row" style="margin-bottom: 75px">
	<div class="col-lg-offset-2">
		<div class="col-lg-10">		
			<?php
				$tmp = explode(DS, __DIR__);
				$dir = $tmp[count($tmp) - 1];
			?>								
			<form id="color_form" class="well" method="post" enctype="multipart/form-data" action="<?=BASE_PATH.$dir.PD.'3.php'?>">				
				<div class="form-group">
					<label for="color_pic">Итак. Ваш любимый цвет ?... :</label>
					<select id="fav_color" name="fav_color" style="font-weight: bold;color: <?=$fav_color?>;">
						<?php foreach ($colors as $key=>$value) { $col_nom = ++$key; ?>
							<option style="color: <?=$value['hex_color']?>; font-weight: bold;" value="<?=$col_nom;?>" <?=$fav_from_cookie === strval($col_nom) ? 'selected="selected"' : "";?>><?=$value['name']?></option>									
						<?php }?>
					</select>
					<p <?=empty($fav_color) ? '' : 'style="color: ' . $fav_color . ';"';?>>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</form>

		</div>		
	</div>
</div>

<script type="text/javascript">
	$('#fav_color').change(function(){
		$('#color_form').submit();
		});	
</script>


<?php 
include '../common/footer.php';
?>
