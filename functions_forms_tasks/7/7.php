<?php
$f = __FILE__;
$style =  '<link rel="stylesheet" href="7/7.css">';
include '../common/title.php';
?>

<div class="row" style="margin-bottom: 75px">
	<div class="col-lg-offset-2">
		<div class="col-lg-10">
			<?php 
				$tmp = explode(DS, __DIR__);
				$dir = $tmp[count($tmp) - 1];
				$filename = __DIR__. PD . 'comments.txt';
				
				if(file_exists($filename)){
					$content = file_get_contents($filename);
					$content = '[' . str_replace('}{', '},{', $content) . ']';
					$data = json_decode($content, true);
				}
			?>
			
			<div class="form-group well">
				<label for="tab_files">Комментарии пользовтелей:</label>
				<?php if(isset($data)) { ?>
					<?php foreach($data as $post) { ?>
						<div class="panel panel-default">
							<div class="panel-heading"><?='Пользователь ' . $post['user'] . ',  ' . str_replace(' ', ' в ', $post['t_stamp']) . ', написал следущее:' ?></div>
							<div class="panel-body">
								<p><?=$post['message']; ?></p>
							</div>													
						</div>
					<?php } ?>
				<?php } ?>
			</div>
							
			<form id="comment_form" class="well" method="post" enctype="multipart/form-data" action="<?=BASE_PATH.$dir.PD.'controller.php'?>">
				<div class="form-group">
					<label for="nick">Ваш ник или e-mail:</label>
					<input type="text" id="nick" name="nick" class="form-control" required />
					<label for="comment">Что Вы имеете нам сказать ? :</label>
					<textarea rows="10" name="comment" id="comment" class="form-control" placeholder="Полегче с лексикой ..." required></textarea>
				</div>

				<input type="submit" form="comment_form" class="btn btn-default" value="Отправить" />
			</form>

		</div>		
	</div>
</div>

<?php 
include '../common/footer.php';
?>
