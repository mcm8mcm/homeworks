<?php
$f = __FILE__;
$style =  '<link rel="stylesheet" href="9/9.css">';
//$script =  '<script src="9/mcm.js"></script>';
include '../common/title.php';
?>

<div class="row" style="margin-bottom: 75px">
	<div class="col-lg-offset-2">
		<div class="col-lg-10">
			<?php 
				$tmp = explode(DS, __DIR__);
				$dir = $tmp[count($tmp) - 1];
				$filename = __DIR__. PD . 'comments.txt';				
			?>
										
			<form id="word_reverse_form" class="well" method="post" enctype="multipart/form-data" action="">
				<div class="form-group">
					<label for="r_word">Результат работы:</label>
					<b><p id="r_word" name="r_word" class="form-control"></p></b>
					<label for="comment">Введите слово для реверса :</label>
					<input name="word" id="word" type="text" required />
				</div>
				<!-- 
				<input type="submit" form="comment_form" class="btn btn-default" value="Отправить" />
				 -->
			</form>

		</div>		
	</div>
</div>
<script src="9/mcm.js"></script>
<?php 
include '../common/footer.php';
?>
