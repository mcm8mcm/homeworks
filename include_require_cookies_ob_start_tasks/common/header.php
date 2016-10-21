<?php define('BASE_PATH', 'http://localhost:8080/include_require_cookies_ob_start_tasks/')?>
<?php define('PD', '/')?>
<?php define('DS', DIRECTORY_SEPARATOR)?>
<!DOCTYPE html>
<html>
<head>
	<base href="<?=BASE_PATH?>">
	<meta charset="utf-8">
	<title><?=$title?></title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="common/mcm.css">
	<?php if(isset($style)) echo $style;?>
	<?php if(isset($script)) echo $script;?>	
	<script
			  src="https://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
</head> 
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?=isset($title) ? $title : '';?></a>
    </div>
  </div>
</nav>
<div class="container">
