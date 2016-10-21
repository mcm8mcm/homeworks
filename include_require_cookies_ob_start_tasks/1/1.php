<?php
$f = __FILE__;
$style =  '<link rel="stylesheet" href="1/1.css">';
include '../common/title.php';

//Данные о времени и счетчике беруться либо из кики либо из файла,
//Если хитрый юзер отключил прием куки

$data = [];
$content_file = __DIR__.PD.'content.dat';
$counter = 0;

$id = '';
$last_time = 0;
$warning = '';
$message = isset($_POST['comment']) ? $_POST['comment'] : '';

if (isset($_COOKIE['user_id'])){
	$id = $_COOKIE['user_id'];
	$counter = intval($_COOKIE['counter']);
	$last_time = intval($_COOKIE['last_time']);	
}elseif (isset($_POST['user_id'])){
	$id = $_POST['user_id'];
	$counter = intval($_POST['counter']);
	$last_time = floatval($_POST['last_time']);
}

$curr_time = microtime(true);
if(empty($id)){
	$last_time = $curr_time;
	$id = md5(strval(rand($last_time - rand(100, 1000), $last_time)));
}


if(!empty($message)) {
	$counter++;
}

if(($curr_time - $last_time) <= 60) {
	if($counter > 3) {
		$warning = 'Не более 3-х постов в минуту';
	}
}else{
	$last_time = $curr_time;
	$counter = 1;
}

if(empty($warning) && !empty($message)){
	if(file_exists($content_file)){
		$content = file_get_contents($content_file);
		$data = unserialize($content);
	}
	
	$time_stamp = date_format(date_create(), 'd.m.Y H.m.s');
	$data[$id][] = ['t_stamp' => $time_stamp, 'message' => $message];
	$content = serialize($data);
	file_put_contents($content_file, $content);
}

setcookie('user_id', $id);
setcookie('counter', $counter);
setcookie('last_time', $last_time);
?>


<div class="row" style="margin-bottom: 75px">
	<div class="col-lg-offset-2">
		<div class="col-lg-10">
			<?php 
				$tmp = explode(DS, __DIR__);
				$dir = $tmp[count($tmp) - 1];
				
				if(file_exists($content_file)){				
					$content = file_get_contents($content_file);
					$data = unserialize($content);
					if($data){
						if(!array_key_exists($id , $data)){
							$data = null;
						}else {
							$data = $data[$id];
						}
					}
				}
			?>
			
			<div class="form-group well">
				<label for="tab_files">Комментарии пользовтелей:</label>
				<?php if(isset($data) && $data) { ?>
					<?php foreach($data as $post) { ?>
						<div class="panel panel-default">
							<div class="panel-heading"><?='Вы ' . str_replace(' ', ' в ', $post['t_stamp']) . ', написали следущее:' ?></div>
							<div class="panel-body">
								<p><?=$post['message']; ?></p>
							</div>													
						</div>
					<?php } ?>
				<?php } ?>
				
				<?php if(!empty($warning)) { ?>
					<div class="alert alert-warning fade in"> 
						<button class="close" data-dismiss="alert" aria-label="close">&times;</button>
						 <strong><?=$warning?></strong>
					</div>
				<?php } ?>
				
			</div>
							
			<form id="comment_form" class="well" method="post" enctype="multipart/form-data" action="<?=BASE_PATH.$dir.PD.'1.php'?>">
				<input type="hidden" name="user_id" id="user_id" value="<?=$id?>">
				<input type="hidden" name="last_time" id="last_time" value="<?=$last_time?>">	
				<input type="hidden" name="counter" id="counter" value="<?=$counter?>">	
							
				
				<div class="form-group">
					<!-- 
					<label for="nick">Ваш ник или e-mail:</label>
					<input type="text" id="nick" name="nick" class="form-control" required />
					 -->
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
